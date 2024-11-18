<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardPublicationController extends Controller
{
    public function index()
    {
        // Definindo um título para a página
        $title = 'Dashboard';

        // Retorna a view 'dashboard' com a variável $title
        return view('dashboard-publication', compact('title'));
    }
}
