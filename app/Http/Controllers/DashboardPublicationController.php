<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;


class DashboardPublicationController extends Controller
{
    /**
     * Exibe o formulário para criar uma nova publicação.
     */
    public function create()
    {
        return view('dashboard-publication');
    }

    /**
     * Lista todas as publicações.
     */
    public function index()
    {
        $publications = Publication::all(); // Recupera todas as publicações
        return view('dashboard-publication', compact('publications'));
    }

    /**
     * Processa e armazena uma nova publicação.
     */
    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $validated = $request->validate([
            'title' => 'string|required',
            'author' => 'string|required',
            'resume' => 'string|required|max:1000',
            'item_type' => 'string|required',
            'status' => 'string|required',
            'research_lines' => 'required|array|min:1',
            'research_lines.*' => 'string|required',
            'images' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'file' => 'required|mimes:pdf,zip,apk|max:10240', // Arquivo obrigatório
            'year' => 'integer|required',
            'location' => 'string|required',
            'type' => 'required|string|in:article,game,event,other',
        ]);

        // Mapeamento do tipo para seção
        $sectionMapping = [
            'Artigo' => 3,
            'Jogo APK' => 4,
            'Participação em Eventos' => 5,
            'Outros' => 6,
        ];
        
        $sectionId = $sectionMapping[$validated['item_type']] ?? null;

        
        // Verifica e processa o arquivo (obrigatório)
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $filePath = $this->processFile($request->file('file'));
        Log::info('Caminho do arquivo salvo:', ['filePath' => $filePath]); // Log para verificação
        } else {
            return redirect()->back()->withErrors(['file' => 'O arquivo é obrigatório e deve ser válido.'])->withInput();
        }
        
        // Processar imagens (se houver)
        $imagePaths = $request->has('images') ? $this->processImages($request->file('images')) : null;

        // Criar publicação no banco de dados
        Publication::create([
            'title' => $validated['title'],
            'author' => $validated['author'],
            'resume' => $validated['resume'],
            'item_type' => $validated['item_type'],
            'status' => $validated['status'],
            'research_lines' => json_encode($validated['research_lines']),
            'year' => $validated['year'],
            'location' => $validated['location'],
            'type' => $validated['type'],
            'section_id' => $sectionId,
            'images' => $imagePaths ? json_encode($imagePaths) : null,
            'file' => $filePath,
        ]);

        // Redirecionar com base no tipo da publicação
        return redirect(url("/repositorio#{$validated['type']}"))
            ->with('success', Str::title($validated['type']) . ' cadastrado com sucesso!');
    }

    /**
     * Processa e armazena imagens.
     */
    private function processImages($images)
    {
        $imagePaths = [];
        foreach ($images as $image) {
            try {
                $fileName = now()->timestamp . '.' . $image->getClientOriginalExtension();
                $path = Storage::disk('public')->putFileAs('images', $image, $fileName);
                $imagePaths[] = $path;
            } catch (\Exception $e) {
                report($e); // Log de erros
            }
        }
        return $imagePaths;
    }

    /**
     * Processa e armazena arquivos.
     */
    private function processFile($file)
    {
        try {
            $fileName = now()->timestamp . '.' . $file->getClientOriginalExtension();
            return $file->storeAs('files', $fileName, 'public'); // Salva o arquivo no disco 'public'
        } catch (\Exception $e) {
            report($e);
            return null; // Retorna null em caso de erro
        }
    }
}    