<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slide;

class SlideSeeder extends Seeder
{
    public function run()
    {
        Slide::create([
            'title' => 'Inovação e Educação com Impacto',
            'text' => 'O RGEAR é um centro de excelência em engenharia, inteligência artificial e robótica.',
            'image' => '/img/carrousel/slide1.jpg',
            'link' => '#sobre',
            'btn_text' => 'Saiba Mais',
        ]);

        Slide::create([
            'title' => 'Tecnologia para o Futuro',
            'text' => 'Conectamos tecnologia à educação para transformar ideias em soluções.',
            'image' => '/img/carrousel/slide2.jpg',
            'link' => '#projetos',
            'btn_text' => 'Nossos Projetos',
        ]);

        Slide::create([
            'title' => 'Impacto Social e Sustentável',
            'text' => 'Promovemos inovação sustentável para comunidades e estudantes.',
            'image' => '/img/carrousel/slide3.jpg',
            'link' => '#estatisticas',
            'btn_text' => 'Ver Estatísticas',
        ]);
    }
}
