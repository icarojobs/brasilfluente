<?php

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
        $this->call(PopulateEssentialsSeeder::class);
        $this->call(PopulateStateSeeder::class);
        $this->call(PopulateTypesSeeder::class);
        $this->call(PopulateModulesSeeder::class);
    }
}
