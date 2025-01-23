<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function Conditions()
    {
        return $this->belongsToMany(ItemConditionPrice::class, 'item_price_condition' , 'item_id','price_id','condition_id');
    }
}
