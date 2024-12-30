<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication; // Importar o modelo Publication

class DashboardPublieditController extends Controller
{
    // Exibe a lista de publicações cadastradas
    public function index()
    {
        $title = 'Publicações Cadastradas';

        // Busca publicações com paginação
        $publications = Publication::paginate(10);

        // Retorna a view com as publicações
        return view('publicacao-cadastradas', compact('title', 'publications'));
    }

    // Exibe o formulário de edição de uma publicação
    public function edit($id)
    {
        $publication = Publication::findOrFail($id); // Busca a publicação pelo ID

        // Retorna a view de edição com os dados da publicação
        return view('editar-publicacao', compact('publication'));
    }

    // Atualiza uma publicação
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'resume' => 'nullable|string',
            'item_type' => 'required|string',
            'status' => 'required|string',
            'research_lines' => 'nullable|array',
            'year' => 'required|integer',
            'location' => 'nullable|string',
        ]);

        $publication = Publication::findOrFail($id);
        $publication->update($validated);

        return redirect()->route('editarpubli')->with('success', 'Publicação atualizada com sucesso!');
    }

    // Exclui uma publicação
    public function destroy($id)
    {
        $publication = Publication::findOrFail($id);
        $publication->delete();

        return redirect()->route('editarpubli')->with('success', 'Publicação excluída com sucesso!');
    }
}
