<?php

use Illuminate\Database\Seeder;

class PopulateTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();

        \Illuminate\Support\Facades\DB::table('types')->delete();
        \Illuminate\Support\Facades\DB::table('types')->truncate();

        \Illuminate\Support\Facades\DB::table('types')
            ->insert([
                [
                    'id'               => 1,
                    'name'             => 'Text',
                ],[
                    'id'               => 2,
                    'name'             => 'Video',
                ],[
                    'id'               => 3,
                    'name'             => 'Audio',
                ],[
                    'id'               => 4,
                    'name'             => 'Vocabulary',
                ],[
                    'id'               => 5,
                    'name'             => 'Object',
                ]
            ]);

        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();
    }
}
