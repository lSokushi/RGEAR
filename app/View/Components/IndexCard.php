<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class IndexCard extends Component
{
    public $index;
    public $title;
    public $resume;
    public $author;
    public $year;
    public $image;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $index,
        $title,
        $resume,
        $author,
        $year,
        $image
    ) {
        $this->index = $index;
        $this->title = $title;
        $this->resume = $resume;
        $this->author = $author;
        $this->year = $year;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.index-card');
    }
}
