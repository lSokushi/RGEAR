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
        $filters = $request->only(['title', 'author', 'year']); // Captura filtros opcionais
    
        // Artigos
        $articles = Publication::where('type', 'article')
            ->when(isset($filters['title']), function ($query) use ($filters) {
                return $query->where('title', 'like', '%' . $filters['title'] . '%');
            })
            ->when(isset($filters['author']), function ($query) use ($filters) {
                return $query->where('author', 'like', '%' . $filters['author'] . '%');
            })
            ->when(isset($filters['year']), function ($query) use ($filters) {
                return $query->where('year', $filters['year']);
            })
            ->latest()
            ->paginate(6);
    
        // Jogos
        $games = Publication::where('type', 'game')
            ->when(isset($filters['title']), function ($query) use ($filters) {
                return $query->where('title', 'like', '%' . $filters['title'] . '%');
            })
            ->when(isset($filters['author']), function ($query) use ($filters) {
                return $query->where('author', 'like', '%' . $filters['author'] . '%');
            })
            ->when(isset($filters['year']), function ($query) use ($filters) {
                return $query->where('year', $filters['year']);
            })
            ->latest()
            ->paginate(6);
    
        // Eventos
        $events = Publication::where('type', 'event')
            ->when(isset($filters['title']), function ($query) use ($filters) {
                return $query->where('title', 'like', '%' . $filters['title'] . '%');
            })
            ->when(isset($filters['author']), function ($query) use ($filters) {
                return $query->where('author', 'like', '%' . $filters['author'] . '%');
            })
            ->when(isset($filters['year']), function ($query) use ($filters) {
                return $query->where('year', $filters['year']);
            })
            ->latest()
            ->paginate(6);
    
        // Outros
        $others = Publication::where('type', 'other')
            ->when(isset($filters['title']), function ($query) use ($filters) {
                return $query->where('title', 'like', '%' . $filters['title'] . '%');
            })
            ->when(isset($filters['author']), function ($query) use ($filters) {
                return $query->where('author', 'like', '%' . $filters['author'] . '%');
            })
            ->when(isset($filters['year']), function ($query) use ($filters) {
                return $query->where('year', $filters['year']);
            })
            ->latest()
            ->paginate(6);
    
        return view('repositorio', compact('articles', 'games', 'events', 'others'));
    }    
}
