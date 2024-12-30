<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;


use App\Models\Researcher;

class SobreNosController extends Controller
{
    public function index()
    {
        // Timeline dos Eventos
        $timeline = [
            [
                'year' => '2018',
                'title' => 'Fundação do grupo',
                'description' => 'Fundação do grupo e início das oficinas de robótica educacional.',
                'color' => 'primary',
            ],
            [
                'year' => '2019',
                'title' => 'Participação na SNCT',
                'description' => 'Participação ativa na SNCT com palestras e oficinas sobre Arduino e ThinkerCad.',
                'color' => 'secondary',
            ],
            [
                'year' => '2020',
                'title' => 'Expansão de projetos',
                'description' => 'Expansão de projetos interdisciplinares com impacto social e sustentável.',
                'color' => 'success',
            ],
            [
                'year' => '2023',
                'title' => 'Iniciativas sustentáveis',
                'description' => 'Lançamento de iniciativas sustentáveis e integração de economia circular.',
                'color' => 'dark',
            ],
        ];

        // Áreas de Atuação
        $areas = [
            [
                'icon' => 'fa-robot',
                'title' => 'Automação e Robótica Educacional',
                'description' => 'Desenvolvimento de robôs para ensino técnico, projetos em Arduino, ThinkerCad e outras ferramentas práticas.',
            ],
            [
                'icon' => 'fa-recycle',
                'title' => 'Computação, Educação e Sustentabilidade',
                'description' => 'Pesquisa em economia circular e robótica sustentável.',
            ],
            [
                'icon' => 'fa-brain',
                'title' => 'Engenharia e IA Aplicada',
                'description' => 'Soluções tecnológicas com uso de IA e IoT.',
            ],
        ];

        // Destaques
        $highlights = [
            [
                'icon' => 'bi-briefcase-fill',
                'value' => '20+',
                'text' => 'Projetos concluídos e em andamento',
            ],
            [
                'icon' => 'bi-journal-text',
                'value' => '15+',
                'text' => 'Artigos publicados',
            ],
            [
                'icon' => 'bi-people-fill',
                'value' => '50+',
                'text' => 'Estudantes capacitados',
            ],
            [
                'icon' => 'bi-calendar-event',
                'value' => '5+',
                'text' => 'Eventos organizados',
            ],
        ];

        // Pesquisadores Dinâmicos
        $pesquisadores = Researcher::where('status', 'ativo')->get();
        Log::info('Pesquisadores ativos:', $pesquisadores->toArray());

        // Retorna os dados para a view
        return view('sobreNos', [
            'timeline' => $timeline,
            'areas' => $areas,
            'highlights' => $highlights,
            'pesquisadores' => $pesquisadores,
        ]);
    }
}
