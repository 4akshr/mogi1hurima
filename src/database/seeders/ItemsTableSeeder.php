<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => '腕時計',
                'image' => 'storage/items/MensClock.jpg',
                'description' => 'スタイリッシュなデザインのメンズ腕時計',
            ],
            [
                'name' => 'HDD',
                'image' => 'storage/items/HardDisk.jpg',
                'description' => '高速で信頼性の高いハードディスク',
            ],
            [
                'name' => '玉ねぎ３束',
                'image' => 'storage/items/iLoveMG.jpg',
                'description' => '新鮮な玉ねぎ３束のセット',
            ],
            [
                'name' => '革靴',
                'image' => 'storage/items/LeatherShoes.jpg',
                'description' => 'クラシックなデザインの革靴',
            ],
            [
                'name' => 'ノートPC',
                'image' => 'storage/items/NotePC.jpg',
                'description' => '高性能なノートパソコン',
            ],
            [
                'name' => 'マイク',
                'image' => 'storage/items/MusicMic.jpg',
                'description' => '高音質のレコーディング用マイク',
            ],
            [
                'name' => 'ショルダーバッグ',
                'image' => 'storage/items/Bag.jpg',
                'description' => 'おしゃれなショルダーバッグ',
            ],
            [
                'name' => 'タンブラー',
                'image' => 'storage/items/Tumbler.jpg',
                'description' => '使いやすいタンブラー',
            ],
            [
                'name' => 'コーヒーミル',
                'image' => 'storage/items/CoffeeGrinder.jpg',
                'description' => '手動のコーヒーミル',
            ],
            [
                'name' => 'メイクセット',
                'image' => 'storage/items/外出メイクアップセット.jpg',
                'description' => '便利なメイクアップセット',
            ],
        ]);
    }
}
