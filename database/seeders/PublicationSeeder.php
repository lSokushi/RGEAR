<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publication;

class PublicationSeeder extends Seeder
{
    public function run()
    {
        // Sessão: Artigos
        Publication::create([
            'title' => 'Artigo sobre Robótica Educacional',
            'resume' => 'Este artigo explora o impacto da robótica no ensino básico.',
            'year' => 2024,
            'research_lines' => json_encode(['Robótica', 'Educação']),
            'item_type' => 'Artigos', // Usando item_type para categorizar
            'status' => 'Publicado',
            'file' => 'files/artigo_robotica.pdf',
            'images' => json_encode(['images/artigo_robotica1.jpg']),
            'location' => 'Salvador, BA',
            'section_id' => 3,
        ]);

        Publication::create([
            'title' => 'Estudo de IA na Educação',
            'resume' => 'Pesquisas sobre como inteligência artificial pode melhorar o aprendizado.',
            'year' => 2023,
            'research_lines' => json_encode(['IA Aplicada', 'Educação']),
            'item_type' => 'article', // Usando item_type para categorizar
            'status' => 'Publicado',
            'file' => 'files/ia_educacao.pdf',
            'images' => json_encode(['images/ia_educacao.jpg']),
            'location' => 'São Paulo, SP',
            'section_id' => 3,
        ]);

        // Sessão: Jogos
        Publication::create([
            'title' => 'Jogo Educacional: Aprendendo Sustentabilidade',
            'resume' => 'Um jogo interativo sobre práticas sustentáveis.',
            'year' => 2022,
            'research_lines' => json_encode(['Sustentabilidade', 'Jogos Educacionais']),
            'item_type' => 'Eventos', // Usando item_type para categorizar
            'status' => 'Publicado',
            'file' => 'files/jogo_sustentabilidade.apk',
            'images' => json_encode(['images/jogo_sustentabilidade.jpg']),
            'location' => 'Rio de Janeiro, RJ',
            'section_id' => 4,
        ]);

        Publication::create([
            'title' => 'Jogo de Matemática para Crianças',
            'resume' => 'Um jogo que ensina conceitos matemáticos de forma divertida.',
            'year' => 2023,
            'research_lines' => json_encode(['Educação', 'Jogos Interativos']),
            'item_type' => 'Jofos', // Usando item_type para categorizar
            'status' => 'Publicado',
            'file' => 'files/jogo_matematica.apk',
            'images' => json_encode(['images/jogo_matematica.jpg']),
            'location' => 'Brasília, DF',
            'section_id' => 4,
        ]);

        // Sessão: Eventos
        Publication::create([
            'title' => 'Feira Nacional de Robótica 2023',
            'resume' => 'Relatório de participação na feira nacional de robótica.',
            'year' => 2023,
            'research_lines' => json_encode(['Robótica', 'Eventos Científicos']),
            'item_type' => 'Outros', // Usando item_type para categorizar
            'status' => 'Publicado',
            'file' => 'files/feira_robotica.pdf',
            'images' => json_encode(['images/feira_robotica.jpg']),
            'location' => 'Curitiba, PR',
            'section_id' => 5,
        ]);

        Publication::create([
            'title' => 'Congresso de Inteligência Artificial 2024',
            'resume' => 'Resumo da participação do grupo no congresso de IA.',
            'year' => 2024,
            'research_lines' => json_encode(['IA Aplicada', 'Eventos Acadêmicos']),
            'item_type' => 'event', // Usando item_type para categorizar
            'status' => 'Publicado',
            'file' => 'files/congresso_ia.pdf',
            'images' => json_encode(['images/congresso_ia.jpg']),
            'location' => 'São Paulo, SP',
            'section_id' => 5,
        ]);

        // Sessão: Outros
        Publication::create([
            'title' => 'Manual de Sustentabilidade Educacional',
            'resume' => 'Guia para implementar práticas sustentáveis em projetos educacionais.',
            'year' => 2022,
            'research_lines' => json_encode(['Sustentabilidade', 'Educação']),
            'item_type' => 'other', // Usando item_type para categorizar
            'status' => 'Publicado',
            'file' => 'files/manual_sustentabilidade.pdf',
            'images' => json_encode(['images/manual_sustentabilidade.jpg']),
            'location' => 'Porto Alegre, RS',
            'section_id' => 6,
        ]);

        Publication::create([
            'title' => 'Guia Prático de Robótica Educacional',
            'resume' => 'Um manual prático para professores implementarem robótica em sala de aula.',
            'year' => 2023,
            'research_lines' => json_encode(['Educação', 'Robótica']),
            'item_type' => 'other', // Usando item_type para categorizar
            'status' => 'Publicado',
            'file' => 'files/guia_robotica.pdf',
            'images' => json_encode(['images/guia_robotica.jpg']),
            'location' => 'Recife, PE',
            'section_id' => 6,
        ]);
    }
}
