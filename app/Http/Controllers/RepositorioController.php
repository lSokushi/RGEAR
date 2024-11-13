<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class RepositorioController extends Controller
{
    public function index()
    {


        

        // Exemplo de dados em $publicacoes, contendo image_caption e outros campos
        $publicacoes = [
            [
                'image_caption' => 'Legenda para a imagem',
                'image' => '/img/bg-reviews.jpg',
                'title' => 'Título do Artigo',
                'description' => 'Descrição do artigo...',
                'author' => 'Autor Exemplo',
                'updated_at' => now()->subMinutes(3),
            ],
            // Adicione mais publicações conforme necessário
        ];
 
        // Retorna a view com a variável $publicacoes
        return view('repositorio', [
            "publicacoes" => $publicacoes
        ]);
    }
}