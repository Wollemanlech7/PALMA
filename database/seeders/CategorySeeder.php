<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {

        DB::table('categories')->insert([
            'Category' => 'Abarrotes'
        ]);

        DB::table('categories')->insert([
            'Category' => 'Bebidas'
        ]);

        DB::table('categories')->insert([
            'Category' => 'Botanas'
        ]);

        DB::table('categories')->insert([
            'Category' => 'Dulceria'
        ]);

        DB::table('categories')->insert([
            'Category' => 'Harinas y Pan'
        ]);

        DB::table('categories')->insert([
            'Category' => 'Otros'
        ]);


    }
}
