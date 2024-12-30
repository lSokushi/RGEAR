<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    public function index()
    {
        return view('relatorios.index'); // Ajuste conforme a estrutura do seu projeto
    }
}
