<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Sales_ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sale_products')->insert([
            'sale_id' => 1,
            'product_id' => 1,
            'quantity' => 5,
            'price' => 50.00,
            'total' => 250,
            'characteristic_id' => 1,
        ]);

        DB::table('sale_products')->insert([
            'sale_id' => 1,
            'product_id' => 2,
            'quantity' => 1,
            'price' => 50.00,
            'total' => 50,
            'characteristic_id' => 1,
        ]);

        DB::table('sale_products')->insert([
            'sale_id' => 2,
            'product_id' => 3,
            'quantity' => 5,
            'price' => 10.00,
            'total' => 50,
            'characteristic_id' => 1,
        ]);

        DB::table('sale_products')->insert([
            'sale_id' => 3,
            'product_id' => 1,
            'quantity' => 1,
            'price' => 50,
            'total' => 50,
            'characteristic_id' => 1,
        ]);



       
    }
}

