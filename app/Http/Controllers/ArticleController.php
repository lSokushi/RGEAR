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
     * Exibe o repositório de artigos com opções de pesquisa e filtros.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function repository(Request $request)
    {
        // Inicializa a query para pesquisa
        $query = Publication::query();

        // Filtra por título
        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->input('title') . '%');
        }

        // Filtra por autor
        if ($request->filled('author')) {
            $query->where('author', 'like', '%' . $request->input('author') . '%');
        }

        // Filtra por ano
        if ($request->filled('year')) {
            $query->where('year', $request->input('year'));
        }

        // Ordena e pagina os resultados
        $articles = $query->orderBy('created_at', 'desc')->paginate(10);

        // Retorna a view do repositório com os dados filtrados
        return view('repositorio', compact('articles'));
    }
}
