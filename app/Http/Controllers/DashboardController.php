<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Definindo um título para a página
        $title = 'Dashboard';

        // Recupera o ID do role do usuário logado e busca o role correspondente
        $userRole = User::select('role_id')->find(Auth::user()->id);
        

        if ($userRole->role_id == 2) {
            
          $roles = Role::where('id', 3)->get();

        } else {
            $roles = Role::all(); // Busca todos os roles do sistema
        }


        // Retorna a view 'dashboard' com a variável $title
        return view('dashboard')->with('roles', $roles);
    }
}