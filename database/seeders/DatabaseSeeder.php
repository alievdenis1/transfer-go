<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CurrencySeeder::class,
            CountriesSeeder::class,
            RequisiteSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            OrderStatusSeeder::class
        ]);
    }
}
