<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $userName;

    public function __construct($userName)
    {
        $this->userName = $userName;
    }

    public function render()
    {
        return view('components.sidebar');
    }
}
