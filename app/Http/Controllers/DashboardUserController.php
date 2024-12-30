<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Certifique-se de importar o modelo de Usuários

class DashboardUserController extends Controller
{
    // Exibe a lista de usuários
    public function index()
    {
        $title = 'Usuários Cadastrados';
        
        // Busca usuários com paginação
        $users = User::paginate(10);

        // Retorna a view com os dados de usuários
        return view('usuarios-cadastrados', compact('title', 'users'));
    }

    // Exibe o formulário de edição de um usuário
    public function edit($id)
    {
        $user = User::findOrFail($id); // Busca o usuário pelo ID
        return view('editar-usuario', compact('user')); // Retorna a view de edição
    }
    
    // Atualiza os dados do usuário
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'type' => 'required|in:Administrador,Supervisor,Usuario',
        ]);

        $user = User::findOrFail($id);
        $user->update($validated);

        return redirect()->route('usuarios.index')->with('success', 'Usuário atualizado com sucesso!');
    }

    // Exclui um usuário
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuário excluído com sucesso!');
    }
}

