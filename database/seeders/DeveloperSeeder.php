<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Developer::create(
            [
                'name' => 'Guilherme Abdon',
                'description' => 'Descrição do desenvolvedor',
                'image' =>"imagem"
            ]
        );
    }
}