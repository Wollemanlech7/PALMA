<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CompanySeeder::class,
            Type_UserSeeder::class,
            CompanySeeder::class,
            CategorySeeder::class,
            StatusSeeder::class,
            ProductsSeeder::class,
            Sales_ProductsSeeder::class,
            SalesSeeder::class,
            CharacteristicsSeeder::class, 
        ]);
    }
}
