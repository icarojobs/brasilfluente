<?php

use Illuminate\Database\Seeder;

class PopulateModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();

        \Illuminate\Support\Facades\DB::table('modules')->delete();
        \Illuminate\Support\Facades\DB::table('modules')->truncate();

        \Illuminate\Support\Facades\DB::table('modules')
            ->insert([
                [
                    'id'                => 1,
                    'name'              => 'Basic',
                    'slug'              => 'basic',
                    'order'             => 1.0000
                ],[
                    'id'                => 2,
                    'name'              => 'Intermediate',
                    'slug'              => 'intermediate',
                    'order'             => 2.0000
                ],[
                    'id'                => 3,
                    'name'              => 'Advanced',
                    'slug'              => 'advanced',
                    'order'             => 3.0000
                ],[
                    'id'                => 4,
                    'name'              => 'Fluent',
                    'slug'              => 'fluent',
                    'order'             => 4.0000
                ]
            ]);

        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();
    }
}
