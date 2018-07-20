<?php

use Illuminate\Database\Seeder;
use App\Models\State;
use App\Models\City;

class PopulateStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $check = State::first() ?? null;

        if (!$check) {
            // Add states and cities
            $string = file_get_contents( base_path('cidades.json') );
            $json = json_decode($string);

            $states = $json->estados;

            foreach ($states as $state)
            {
                // Add a state
                $stateSaved = State::updateOrCreate(
                    [
                        'initials' => $state->sigla,
                        'name' => $state->nome
                    ]
                );

                // Add cities of this state
                foreach ($state->cidades as $city)
                {
                    City::updateOrCreate(
                        [
                            'state_id' => $stateSaved->id ?? 0,
                            'name' =>  $city
                        ]
                    );
                }
            }
        }
    }
}
