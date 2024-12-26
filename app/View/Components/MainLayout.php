<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MainLayout extends Component
{
    public $title;

    public function __construct($title = 'Título Padrão')
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('components.main-layout');
    }
}
