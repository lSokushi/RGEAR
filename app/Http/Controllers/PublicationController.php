<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PublicationController extends Controller
{
    public function index()
    {
        return view('publications.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'autores' => 'required|string|max:255',
            'resumo' => 'nullable|string',
            'tipo' => 'required|string',
            'status' => 'required|string',
            'linha' => 'nullable|array',
            'linha.*' => 'string',
            'ano' => 'required|integer',
            'local' => 'required|string',
            'arquivo' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        if ($request->hasFile('arquivo')) {
            $path = $request->file('arquivo')->store('publications', 'public');
            $validated['arquivo'] = $path;
        }

        $validated['linha'] = isset($validated['linha']) ? implode(', ', $validated['linha']) : null;

        Publication::create($validated);

        return redirect()->back()->with('success', 'Publicação cadastrada com sucesso!');
    }
}
