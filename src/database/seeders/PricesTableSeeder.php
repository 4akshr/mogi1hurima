<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prices')->insert([
            [
                'price' => '15000',
            ],
            [
                'price' => '5000',
            ],
            [
                'price' => '300',
            ],
            [
                'price' => '4000',
            ],
            [
                'price' => '45000',
            ],
            [
                'price' => '8000',
            ],
            [
                'price' => '3500',
            ],
            [
                'price' => '500',
            ],
            [
                'price' => '2500',
            ],
        ]);
    }
}
