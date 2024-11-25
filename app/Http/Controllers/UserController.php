<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10); // Adiciona paginação
        return response()->json($users);
    }
    public function create()
    {
        $roles = Role::where("name", "!=", "Administrador")->get();


        return view('dashboard', [
            "title" => "Cadastro de usuários",
            "roles" => $roles
        ]);
    }
    public function store(Request $request)
    {
    
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'cpf' => 'required|string|max:11|unique:users',
            'password' => 'required|string|min:6',
            'role_id' => 'required|exists:roles,id',
        ]);
        

        $validated['password'] = bcrypt($validated['password']); // Criptografa a senha
        $validated['status'] = 'active'; //Status padrão de ativo

        User::create($validated);
        return redirect()->back()->with('success','Usuário cadastrado com sucesso!');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|unique:users,email,' . $id,
            'cpf' => 'sometimes|string|max:11|unique:users,cpf,' . $id,
            'password' => 'sometimes|string|min:6',
            'role_id' => 'sometimes|exists:roles,id',
        ]);

        if ($request->has('password')) {
            $request->merge(['password' => bcrypt($request->password)]); // Criptografa a senha
        }

        $user->update($request->validated());
        return response()->json($user);
    }

    public function destroy($id)
    {
        User::destroy($id);
        return response()->json(null, 204);
    }
}
