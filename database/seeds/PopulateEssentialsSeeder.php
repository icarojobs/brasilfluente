<?php

use Illuminate\Database\Seeder;

class PopulateEssentialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create user master
        \App\Models\User::updateOrCreate(
            [
                'email' => 'icarowilliam@me.com'
            ],
            [
                'name' => 'Icaro Jobs',
                'alias' => 'Jobs',
                'password' => bcrypt('1234')
            ]
        );
    }
}
