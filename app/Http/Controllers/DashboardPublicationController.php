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
        // Mapear 'resume' para 'description'
        $request->merge([
            'description' => $request->input('resume'),
        ]);

        // Validação dos dados recebidos
        $validated = $request->validate([
            'title' => 'string|required',
            'author' => 'string|required',
            'resume' => 'string|required',
            'item_type' => 'string|required',
            'status' => 'string|required',
            'research_lines' => 'required|array|min:1',
            'research_lines.*' => 'string|required',
            'images' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'file' => 'required|mimes:pdf,zip,apk|max:10240',
            'year' => 'integer|required',
            'location' => 'string|required',
            'type' => 'required|string|in:article,game,event,other',
            'section_id' => 'required|integer|in:1,2,3,4',
            'description' => 'required|string|max:1000', // Adicione aqui a validação para a descrição
        ]);



        // Criar uma nova instância do modelo
        $publication = new Publication();
        $publication->title = $validated['title'];
        $publication->author = $validated['author'];
        $publication->resume = $validated['resume'];
        $publication->item_type = $validated['item_type'];
        $publication->status = $validated['status'];
        $publication->research_lines = json_encode($validated['research_lines']);
        $publication->year = $validated['year'];
        $publication->location = $validated['location'];
        $publication->section_id = $validated['section_id'];

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

        // Salvar a publicação no banco de dados
        $publication->save();

        // Salvar em tabelas específicas (se aplicável)

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
                        'description' => $validated['resume'], // Mapeia o campo 'resume' para 'description'
                        'resume' => $validated['resume'],
                        'images' => $publication->images,
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