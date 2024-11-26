<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use App\Models\Event;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $publications = Publication::orderBy("created_at", "desc")->limit(3)->get();
        $events = Event::all();

        return view("index", [
            "publications"=> $publications,
            "events"=> $events
        ]);
    }
}
