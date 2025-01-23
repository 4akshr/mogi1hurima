<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Price;
use App\Models\Condition;

class ItemController extends Controller
{
    public function getIndex()
    {
        $items = Item::all();
        return view('index', compact('items'));
    }

    public function upload(ItemRequest $request)
    {
        $dir = 'images';

        $file_name =$request->file('item_image')->getClientOriginalName();
        $request->file('item_image')->storeAs('public/' . $dir, $file_name);

        $item_data = new Item();
        $item_data->name= $POST["item_name"];
        $item_data->price= $_POST["item_price"];
        $item_data->image= 'storage/' . $dir . '/' . $file_name;
        $item_data->description= $POST["item_description"];
        $item_data->save();
    }
}
