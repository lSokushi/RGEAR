<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Retorna a lista de eventos em formato JSON.
     */
    public function index()
    {
        $events = Event::all();
        return response()->json($events);
    }

    /**
     * Exibe a lista de eventos para o frontend (HTML).
     */
    public function list()
    {
        $events = Event::orderBy('date', 'asc')->paginate(6);

        return view('events.index', compact('events'));
    }

    /**
     * Cria um novo evento.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'date' => 'required|date',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
        ]);

        $event = Event::create($request->all());
        return response()->json($event, 201);
    }

    /**
     * Retorna um evento específico em formato JSON.
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return response()->json($event);
    }

    /**
     * Exibe os detalhes de um evento no frontend (HTML).
     */
    public function details($id)
    {
        $event = Event::findOrFail($id);

        return view('events.show', compact('event'));
    }

    /**
     * Atualiza um evento existente.
     */
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->update($request->all());
        return response()->json($event);
    }

    /**
     * Exclui um evento.
     */
    public function destroy($id)
    {
        Event::destroy($id);
        return response()->json(null, 204);
    }
}
