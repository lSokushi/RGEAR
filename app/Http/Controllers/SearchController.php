<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Obtém os parâmetros da solicitação
        $query = $request->input('query');
        $filter = $request->input('filter');

        // Inicializa a query base
        $publicacoes = Publication::query();

        // Aplica o filtro de busca, se fornecido
        if ($query) {
            $publicacoes->where('titulo', 'like', "%{$query}%")
                        ->orWhere('descricao', 'like', "%{$query}%");
        }

        // Aplica o filtro de ordenação, se fornecido
        if ($filter) {
            switch ($filter) {
                case 'data':
                    $publicacoes->orderBy('created_at', 'desc');
                    break;
                case 'relevancia':
                    $publicacoes->orderBy('views', 'desc'); // Exemplo: mais visualizados.
                    break;
                case 'nome':
                    $publicacoes->orderBy('titulo', 'asc');
                    break;
                default:
                    // Caso nenhum filtro válido seja fornecido
                    break;
            }
        }

        // Retorna os resultados paginados em formato JSON
        return response()->json($publicacoes->paginate(10));
    }
}
