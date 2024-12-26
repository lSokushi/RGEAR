<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('sections')->insert([
            ['name' => 'Artigos'], // ID 1
            ['name' => 'Jogos'],   // ID 2
            ['name' => 'Eventos'], // ID 3
            ['name' => 'Outros'],  // ID 4
        ]);
    }
}
