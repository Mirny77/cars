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
        \App\Models\Drive::factory(2)->create();
        \App\Models\Motor::factory(3)->create();
        \App\Models\Brand::factory(10)->create();
        \App\Models\CarModel::factory(25)->create();

    }
}
