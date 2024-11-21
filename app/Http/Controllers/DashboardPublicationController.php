<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardPublicationController extends Controller
{
    public function create()
    {
        // Definindo um título para a página
        $title = 'Dashboard';

        // Retorna a view 'dashboard' com a variável $title
        return view('dashboard-publication', compact('title'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'string|required',
            'author' => 'string|required',
            'resume' => 'string|required',
            'item_type'=> 'string|required',
            'status'=> 'string|required',
            'research_lines'=> '',
            'images'=> '    ',
            'year'=> 'integer|required',
            'location'=> 'string|required',


        ]);



    }
}
