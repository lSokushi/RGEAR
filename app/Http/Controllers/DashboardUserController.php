<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function index()
    {
        // Definindo um título para a página
        $title = 'Dashboard';

        // Retorna a view 'dashboard' com a variável $title
        return view('usuarios-cadastrados', compact('title'));
    }
}
