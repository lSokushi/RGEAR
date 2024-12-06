<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Lista todos os artigos com paginação.
     */
    public function index()
    {
        $publications = Publication::orderBy('created_at', 'desc')->paginate(10);

        return view('articles.index', compact('publications'));
    }

    /**
     * Exibe os detalhes de um artigo específico.
     */
    public function show($id)
    {
        $publication = Publication::findOrFail($id);

        return view('articles.show', compact('publication'));
    }
}
