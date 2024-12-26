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
        $publications = Publication::where('type', 'article')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('articles.index', compact('publications'));
    }

    /**
     * Exibe os detalhes de um artigo específico.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $publication = Publication::findOrFail($id);

        return view('articles.show', compact('publication'));
    }

    /**
     * Exibe o repositório com opções de pesquisa e filtros.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function repository(Request $request)
    {
        // Filtros opcionais para a pesquisa
        $query = Publication::query();

        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->input('title') . '%');
        }

        if ($request->filled('author')) {
            $query->where('author', 'like', '%' . $request->input('author') . '%');
        }

        if ($request->filled('year')) {
            $query->where('year', $request->input('year'));
        }

        // Categorização das publicações
        $articles = $query->where('type', 'article')
            ->orderBy('created_at', 'desc')
            ->paginate(6, ['*'], 'articles');
        
        $games = $query->where('type', 'game')
            ->orderBy('created_at', 'desc')
            ->paginate(6, ['*'], 'games');
        
        $events = $query->where('type', 'event')
            ->orderBy('created_at', 'desc')
            ->paginate(6, ['*'], 'events');
        
        $others = $query->where('type', 'other')
            ->orderBy('created_at', 'desc')
            ->paginate(6, ['*'], 'others');

        // Retorna a view do repositório com os dados organizados
        return view('repositorio', compact('articles', 'games', 'events', 'others'));
    }
}
