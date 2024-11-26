<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            "title" => "Evento teste 1",
            "description" => "Descrição do evento",
            "date" => now(),
            "location" => "Salvador",
            "url" => "https://www.example.com"
        ]);

        Event::create([
            "title" => "Evento teste 2",
            "description" => "Descrição do evento",
            "date" => now(),
            "location" => "Salvador",
            "url" => "https://www.example.com"
        ]);

        Event::create([
            "title" => "Evento teste 3",
            "description" => "Descrição do evento",
            "date" => now(),
            "location" => "Salvador",
            "url" => "https://www.example.com"
        ]);
        Event::create([
            "title" => "Evento teste 4",
            "description" => "Descrição do evento",
            "date" => now(),
            "location" => "Salvador",
            "url" => "https://www.example.com"
        ]);
        Event::create([
            "title" => "Evento teste 5",
            "description" => "Descrição do evento",
            "date" => now(),
            "location" => "Salvador",
            "url" => "https://www.example.com"
        ]);
        Event::create([
            "title" => "Evento teste 6",
            "description" => "Descrição do evento",
            "date" => now(),
            "location" => "Salvador",
            "url" => "https://www.example.com"
        ]);
    }
}
