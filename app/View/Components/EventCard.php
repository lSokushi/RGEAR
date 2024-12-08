<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EventCard extends Component
{
    public $event;

    /**
     * Cria uma nova instância do componente.
     */
    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * Retorna a view do componente.
     */
    public function render()
    {
        return view('components.event-card');
    }
}
