<?php
namespace App\Http\Controllers;
use App\Models\Publication;
use Illuminate\Http\Request;
class RepositorioController extends Controller
{
    public function index()
    {
        $publications = Publication::orderBy("created_at", "desc")->limit(4)->get();

        // Retorna a view com as variáveis $publications e $title
        return view("repositorio", [
            "publications" => $publications,
            "title" => "Repositório" // Adicione o título aqui
        ]);
    }
}