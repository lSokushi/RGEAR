<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::paginate(10);  // Adiciona paginação
        return response()->json($roles);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $role = Role::create($request->validated());  // Usa dados validados
        return response()->json($role, 201);
    }

    public function show($id)
    {
        $role = Role::findOrFail($id);
        return response()->json($role);
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $role->update($request->validated());  // Usa dados validados
        return response()->json($role);
    }

    public function destroy($id)
    {
        // Exemplo de proteção para evitar exclusão de papéis essenciais
        if ($id == 1) {  // Supondo que o papel de 'Admin' tem o ID 1
            return response()->json(['error' => 'Este papel não pode ser excluído'], 403);
        }

        Role::destroy($id);
        return response()->json(null, 204);
    }
}
