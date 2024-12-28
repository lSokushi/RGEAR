<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class RepositorioController extends Controller
{
    public function showRepository()
    {

           // Recupera todas as publicações
    $publications = Publication::orderBy('created_at', 'desc')->get();

        // Filtra as publicações por tipo
        $articles = Publication::where('type', 'article')->get();
        $games = Publication::where('type', 'game')->get();
        $events = Publication::where('type', 'event')->get();
        $others = Publication::where('type', 'other')->get();
    
        // Retorna a view com os dados separados por tipo
        return view('repositorio', compact('publications', 'articles', 'games', 'events', 'others'));
    }
}