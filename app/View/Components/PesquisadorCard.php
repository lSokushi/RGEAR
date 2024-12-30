<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PesquisadorCard extends Component
{
    public $name;
    public $image;
    public $bio;
    public $link;
    public $direction;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $image, $bio, $link, $direction = 'start')
    {
        $this->name = $name;
        $this->image = $image;
        $this->bio = $bio;
        $this->link = $link;
        $this->direction = $direction;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pesquisador-card');
    }
}
