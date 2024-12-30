<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfiguracoesController extends Controller
{
    public function index()
    {
        return view('configuracoes'); // A view correta
    }
}
