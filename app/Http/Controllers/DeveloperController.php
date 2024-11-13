<?php
 
namespace App\Http\Controllers;
 
use App\Models\Developer;
use Illuminate\Http\Request;
 
class DeveloperController extends Controller
{
    /**
     * Exibir uma lista dos developers.
     */
    public function index()
    {
        $developers = Developer::all();
        return view('developers.index', compact('developers'));
    }
 
    /**
     * Mostrar o formulário de criação de um novo developer.
     */
    public function create()
    {
        return view('developers.create');
    }
 
    /**
     * Armazenar um novo developer no banco de dados.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:developers',
            'specialty' => 'nullable|string|max:255',
            // Adicione outros campos conforme necessário
        ]);
 
        Developer::create($data);
 
        return redirect()->route('developers.index')->with('success', 'Developer criado com sucesso!');
    }
 
    /**
     * Exibir um developer específico.
     */
    public function show($id)
    {
        $developer = Developer::findOrFail($id);
        return view('developers.show', compact('developer'));
    }
 
    /**
     * Mostrar o formulário de edição de um developer existente.
     */
    public function edit($id)
    {
        $developer = Developer::findOrFail($id);
        return view('developers.edit', compact('developer'));
    }
 
    /**
     * Atualizar um developer existente no banco de dados.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:developers,email,' . $id,
            'specialty' => 'nullable|string|max:255',
            // Outros campos conforme necessário
        ]);
 
        $developer = Developer::findOrFail($id);
        $developer->update($data);
 
        return redirect()->route('developers.index')->with('success', 'Developer atualizado com sucesso!');
    }
 
    /**
     * Remover um developer do banco de dados.
     */
    public function destroy($id)
    {
        $developer = Developer::findOrFail($id);
        $developer->delete();
 
        return redirect()->route('developers.index')->with('success', 'Developer excluído com sucesso!');
    }
}

