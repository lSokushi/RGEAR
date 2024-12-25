<?php

namespace App\Http\Controllers;

use App\Models\Slide;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::all(); // Busca todos os slides do banco de dados
        return view('slides.index', compact('slides')); // Retorna a view com os slides
    }
}
