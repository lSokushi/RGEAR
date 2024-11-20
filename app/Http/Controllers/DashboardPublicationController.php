<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Http\Controllers\Controller;

class DashboardPublicationController extends Controller
{
    // 1. Display Publications
    public function index()
    {
        // Define um título para a página
        $title = 'Dashboard de Publicações';

        // Busca as publicações do banco de dados
        $publications = Publication::all();


        // Retorna a view com as publicações e o título
        return view('dashboard-publication', compact('publications', 'title'));
    }

    // 2. Store Publication
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'author' => 'required|string|max:255',
                'resume' => 'nullable|string',
                'type' => 'required|integer|in:1,2,3,4,5,6',
                'year' => 'required|integer',
                'location' => 'nullable|string',
                'files.*' => 'nullable|file|mimes:jpg,png,pdf,docx|max:2048',
            ]);

            // Upload dos arquivos
            $filePaths = [];
            if ($request->hasFile('files')) {
                foreach ($request->file('files') as $file) {
                    $path = $file->store('upload', 'public'); // Salvar em storage/app/public/upload
                    $filePaths[] = $path;
                }
            }

            Publication::create(array_merge($validatedData, [
                'files' => json_encode($filePaths),
            ]));

            return redirect()->route('dashboard-publication')->with('success', 'Publicação cadastrada com sucesso!');
        } catch (\Exception $e) {
            \Log::error('Erro ao salvar publicação', ['error' => $e->getMessage()]);
            return redirect()->route('dashboard-publication')->with('error', 'Erro ao cadastrar publicação.');
        }
    }
}
