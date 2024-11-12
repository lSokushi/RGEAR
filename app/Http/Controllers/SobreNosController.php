<?php

namespace App\Http\Controllers;


class SobreNosController extends Controller
{
    
    public function index()
    {
        // Lista de pesquisadores
        $pesquisadores = [
            [
                'name' => 'Dermeval Heitor Souza Gritta',
                'image' => 'img/perfil-dermeval.png',
                'bio' => 'Graduado e mestre em Física pela UFBA, docente do IFBA com pesquisas em Modelagem Computacional e Biofísica Molecular. Atualmente integra o grupo RGEAR, desenvolvendo metodologia de ensino em Robótica Educacional, com foco na reutilização de materiais recicláveis e eletroeletrônicos para aplicação prática no currículo.',
                'direction' => 'start'
            ],
            [
                'name' => 'Joacir Simões Ferreira',
                'image' => 'img/perfil-joacir.png',
                'bio' => 'Doutor pela UFBA (2018), mestre e especialista pela UNIFACS, professor no IFBA. Atua em Robótica, IA e Jogos Digitais, com interesse em Análise Cognitiva e Segurança da Informação. Líder do grupo RGEAR, desenvolve ensino multidisciplinar com materiais recicláveis. Desde 2022, é Assessor de Inovação no DINOV do IFBA.',
                'direction' => 'end'
            ],
            [
                'name' => 'Andrique Figueirêdo Amorim',
                'image' => 'img/perfil-andrique.png',
                'bio' => 'Mestre em Ensino e Bacharel em Ciência da Computação pela UESB, especialista em Robótica Educacional e Engenharia de Sistemas. Professor do IFBA, atua em Informática na Educação, robôs autônomos, kits Lego, C/C++, PHP, sistemas web e jogos digitais. General chair da CBR e membro do grupo RGEAR.',
                'direction' => 'start'
            ],
            [
                'name' => 'João Pedro de Almeida Moraes',
                'image' => 'img/perfil-jpmoraes.png',
                'bio' => 'Graduado em Licenciatura da Computação pelo IFBA (2017), pós-graduado em Educação Profissional (2019) e Desenvolvimento Web (2021), mestre em Ciência da Computação pela UEFS (2023). Atua no grupo RGEAR em Robótica Educacional, desenvolvendo ensino multidisciplinar com materiais recicláveis.',
                'direction' => 'end'
            ],
            [
                'name' => 'Leandro Silva Vasconcellos',
                'image' => 'img/perfil-leandro.png',
                'bio' => 'Engenheiro Eletricista pela UFBA (2008) e mestre em Engenharia Aeronáutica pelo ITA (2013). Professor no IFBA, com experiência em energia renovável, sistemas fotovoltaicos, eficiência energética, eletrônica de potência e mobilidade elétrica. Atuou na Embraer na certificação das aeronaves Legacy 450/500 e E-Jets.',
                'direction' => 'start'
            ],
            [
                'name' => 'Marcio Luis Valença Araújo',
                'image' => 'img/perfil-marcio.png',
                'bio' => 'Professor do Doutorado Multi-Institucional e Multidisciplinar em Difusão do Conhecimento (DMMDC) e do Mestrado em Propriedade Intelectual e Transferência de Tecnologia (PROFNIT). Atua no IFBA, campus Lauro de Freitas. Membro dos grupos de pesquisa NPAI (CNPq) e IPITT (PROFNIT IFBA), com foco em inovação e transferência de tecnologia.',
                'direction' => 'end'
            ]
        ];

        // Passa a lista de pesquisadores para a view 'about-us'
        return view('sobreNos', [
            "pesquisadores" => $pesquisadores
        ]);
    }
}
