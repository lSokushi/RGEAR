<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Definindo um título para a página
        $title = 'Dashboard';

        // Retorna a view 'dashboard' com a variável $title
        return view('dashboard', compact('title'));
    }
}