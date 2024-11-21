<?php
 
namespace Database\Seeders;
 
use App\Models\Researcher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 
class ResearchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Researcher::create([
            "name" => "Dermeval Heitor Souza Gritta",
            "email" => "",
            "image" => "img/Pesquisadores/perfil-dermeval_copy_2-removebg-preview.png",
            "area_of_expertise" => "Graduado e mestre em Física pela UFBA, docente do IFBA com pesquisas em Modelagem Computacional e Biofísica Molecular. Atualmente integra o grupo RGEAR, desenvolvendo metodologia de ensino em Robótica Educacional, com foco na reutilização de materiais recicláveis e eletroeletrônicos para aplicação prática no currículo.",
            "status" => "ativo",
            "direction" => "start",
            "link" => "https://www.google.com/"
        ]);
 
        Researcher::create([
            "name" => "Joacir Simões Ferreira",
            "email" => "",
            "image" => "img/Pesquisadores/perfil-joacir-removebg-preview.png",
            "area_of_expertise" => "Doutor pela UFBA (2018), mestre e especialista pela UNIFACS, professor no IFBA. Atua em Robótica, IA e Jogos Digitais, com interesse em Análise Cognitiva e Segurança da Informação. Líder do grupo RGEAR, desenvolve ensino multidisciplinar com materiais recicláveis. Desde 2022, é Assessor de Inovação no DINOV do IFBA.",
            "status" => "ativo",
            "direction" => "end",
            "link" => "https://www.google.com/"
        ]);
 
        Researcher::create([
            "name" => "Andrique Figueirêdo Amorim",
            "email" => "",
            "image" => "img/Pesquisadores/USER.jpg",
            "area_of_expertise" => "Mestre em Ensino e Bacharel em Ciência da Computação pela UESB, especialista em Robótica Educacional e Engenharia de Sistemas. Professor do IFBA, atua em Informática na Educação, robôs autônomos, kits Lego, C/C++, PHP, sistemas web e jogos digitais. General chair da CBR e membro do grupo RGEAR.",
            "status" => "ativo",
            "direction" => "start",
            "link" => "https://www.google.com/"
        ]);
 
        Researcher::create([
            "name" => "João Pedro de Almeida Moraes",
            "email" => "",
            "image" => "img/Pesquisadores/perfil-jpmoraes.png",
            "area_of_expertise" => "Graduado em Licenciatura da Computação pelo IFBA (2017), pós-graduado em Educação Profissional (2019) e Desenvolvimento Web (2021), mestre em Ciência da Computação pela UEFS (2023). Atua no grupo RGEAR em Robótica Educacional, desenvolvendo ensino multidisciplinar com materiais recicláveis.",
            "status" => "ativo",
            "direction" => "end",
            "link" => "https://www.google.com/"
        ]);
 
        Researcher::create([
            "name" => "Leandro Silva Vasconcellos",
            "email" => "",
            "image" => "img/Pesquisadores/USER.jpg",
            "area_of_expertise" => "Engenheiro Eletricista pela UFBA (2008) e mestre em Engenharia Aeronáutica pelo ITA (2013). Professor no IFBA, com experiência em energia renovável, sistemas fotovoltaicos, eficiência energética, eletrônica de potência e mobilidade elétrica. Atuou na Embraer na certificação das aeronaves Legacy 450/500 e E-Jets.",
            "status" => "ativo",
            "direction" => "start",
            "link" => "https://www.google.com/"
        ]);
 
        Researcher::create([
            "name" => "Marcio Luis Valença Araújo",
            "email" => "",
            "image" => "img/Pesquisadores/USER.jpg",
            "area_of_expertise" => "Professor do Doutorado Multi-Institucional e Multidisciplinar em Difusão do Conhecimento (DMMDC) e do Mestrado em Propriedade Intelectual e Transferência de Tecnologia (PROFNIT). Atua no IFBA, campus Lauro de Freitas. Membro dos grupos de pesquisa NPAI (CNPq) e IPITT (PROFNIT IFBA), com foco em inovação e transferência de tecnologia.",
            "status" => "ativo",
            "direction" => "end",
            "link" => "https://www.google.com/"
        ]);
 
 
 
 
    }
}