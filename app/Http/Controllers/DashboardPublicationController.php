<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Publication;

class DashboardPublicationController extends Controller
{
    public function store(Request $request)
    {


        // Validação dos dados recebidos
        $validated = $request->validate([
            'title' => 'string|required',
            'author' => 'string|required',
            'resume' => 'string|required',
            'item_type' => 'string|required',
            'status' => 'string|required',
            'research_lines' => 'required|array|min:1', // Obrigatório e deve ter pelo menos uma linha
            'research_lines.*' => 'string|required', // Cada linha deve ser uma string válida
            'images' => 'nullable|array', // Para aceitar múltiplas imagens
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', // Validação para cada imagem
            'file' => 'required|mimes:pdf,zip,apk,build', //Aceita um arquivo
            'year' => 'integer|required',
            'location' => 'string|required',
            'type' => 'required|string|in:article,game,event,other', // Validação do tipo

        ]);



        // Criar uma nova instância do modelo
        $publication = new Publication();
        $publication->title = $validated['title'];
        $publication->author = $validated['author'];
        $publication->resume = $validated['resume'];
        $publication->item_type = $validated['item_type'];
        $publication->status = $validated['status'];
        $publication->research_lines = json_encode($validated['research_lines']); // Salvar como JSON no banco
        $publication->year = $validated['year'];
        $publication->location = $validated['location'];

        // Processar imagens se forem enviadas
        if ($request->hasFile('images')) {

            $imagePaths = [];

            foreach ($request->file('images') as $image) {
                $fileName = now()->timestamp . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('images', $fileName, "public"); // Salva na pasta 'public/images'
                array_push($imagePaths, $path);
            }

            $publication->images = json_encode($imagePaths); // Salva as imagens como JSON
        }

        if ($request->hasFile('file')) {
            $fileName = now()->timestamp . '.' . $request->file('file')->getClientOriginalExtension();
            $path = $request->file('file')->storeAs('files', $fileName, 'public');
            $publication->file = $path; // Salva o arquivo como string no banco
        }

        switch ($validated['type']) {
            case 'article':
                \App\Models\Artigo::create([
                    'title' => $validated['title'],
                    'resume' => $validated['resume'],
                    'images' => json_encode($validated['images']),
                    'author' => $validated['author'],
                ]);
                break;
            case 'game':
                \App\Models\Jogo::create([
                    'title' => $validated['title'],
                    'resume' => $validated['resume'],
                    'images' => json_encode($validated['images']),
                    'author' => $validated['author'],
                ]);
                break;
            case 'event':
                \App\Models\Evento::create([
                    'title' => $validated['title'],
                    'resume' => $validated['resume'],
                    'images' => json_encode($validated['images']),
                    'author' => $validated['author'],
                ]);
                break;
            default:
                Publication::create([
                    'title' => $validated['title'],
                    'resume' => $validated['resume'],
                    'images' => json_encode($validated['images']),
                    'author' => $validated['author'],
                ]);
                break;
        }
        // Salvar a publicação no banco de dados
        $publication->save();

        // Redirecionar com mensagem de sucesso
        return redirect()->route('dashboard-publication')->with('success', 'Publicação cadastrada com sucesso!');
    }
    public function create()
    {
        // Retorna a view para criar uma nova publicação
        return view('dashboard-publication');
    }
    public function index()
    {
        // Lógica para exibir uma lista de publicações, se aplicável
        $publications = Publication::all(); // Exemplo: recupera todas as publicações
        return view('dashboard-publication', compact('publications'));
    }
}