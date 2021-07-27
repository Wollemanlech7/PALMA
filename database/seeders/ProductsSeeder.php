<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Products')->insert([
            'name' => 'pan blanco bimbo',
            'cost' => 40,
            'description' => 'pan blanco bimbo',
            'img' => 'img',
            'quantity' => 10,
            'category_id' => 1,
            'company_id' => 1,

        ]);

        DB::table('Products')->insert([
            'name' => 'donas bimbo',
            'cost' => 30,
            'description' => 'donas bimbo',
            'img' => 'img',
            'quantity' => 10,
            'category_id' => 1,
            'company_id' => 1,

        ]);

        DB::table('Products')->insert([
            'name' => 'Coca Cola',
            'cost' => 40,
            'description' => 'Coca de 1L',
            'img' => 'img',
            'quantity' => 10,
            'category_id' => 2,
            'company_id' => 2,

        ]);
    }
}
