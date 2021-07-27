<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            'quantity' => 7,
            'total' => 100.00,
            'money' => 200.00,
            'user_id' => 1,
            'status_id' => 1,
        ]);

        DB::table('sales')->insert([
            'quantity' => 7,
            'total' => 10.00,
            'money' => 50.00,
            'user_id' => 1,
            'status_id' => 2,
        ]);

        DB::table('sales')->insert([
            'quantity' => 4,
            'total' => 60.00,
            'money' => 500.00,
            'user_id' => 1,
            'status_id' => 2,
        ]);

        
    }
}
