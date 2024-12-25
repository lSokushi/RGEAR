<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Publication;
use App\Models\Event;

class IndexController extends Controller
{
    public function index()
    {
        $slides = Slide::all();
        $publications = Publication::orderBy("created_at", "desc")->limit(3)->get();
        $events = Event::all();

        return view('index', [
            'slides' => $slides,
            'publications' => $publications,
            'events' => $events,
        ]);
    }
}
