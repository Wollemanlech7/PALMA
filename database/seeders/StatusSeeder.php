<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'status' => 'Solicitado'
        ]);

        DB::table('status')->insert([
            'status' => 'Aceptado'
        ]);

        DB::table('status')->insert([
            'status' => 'Error'
        ]);

        DB::table('status')->insert([
            'status' => 'No aceptado'
        ]);

        DB::table('status')->insert([
            'status' => 'En camino'
        ]);

        DB::table('status')->insert([
            'status' => 'Entregado'
        ]);

        DB::table('status')->insert([
            'status' => 'Regresado'
        ]);

        DB::table('status')->insert([
            'status' => 'No recibido'
        ]);


    }
}
