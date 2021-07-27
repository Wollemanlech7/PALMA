<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Arturo Ordaz Magana',
            'email' => 'admin@gmail.com',
            'password' => bycript('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'arturo@gmail.com',
            'password' => bycript('admin'),
        ]);
    }
}
