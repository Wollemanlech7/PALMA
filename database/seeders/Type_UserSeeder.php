<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Type_UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_users')->insert([
            'user' => 'Admin'
        ]);

        DB::table('type_users')->insert([
            'user' => 'Usuario'
        ]);

        DB::table('type_users')->insert([
            'user' => 'Generico'
        ]);
    }
}
