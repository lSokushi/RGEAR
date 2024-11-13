<?php
namespace App\Http\Controllers;

use App\Models\PublicationLine;
use Illuminate\Http\Request;

class PublicationLineController extends Controller
{
    public function index()
    {
        $publicationLines = PublicationLine::all();
        return response()->json($publicationLines);
    }

    public function store(Request $request)
    {
        $request->validate([
            'publication_id' => 'required|exists:publications,id',
            'line_id' => 'required|exists:research_lines,id',
        ]);

        $publicationLine = PublicationLine::create($request->all());
        return response()->json($publicationLine, 201);
    }

    public function show($id)
    {
        $publicationLine = PublicationLine::findOrFail($id);
        return response()->json($publicationLine);
    }

    public function update(Request $request, $id)
    {
        $publicationLine = PublicationLine::findOrFail($id);
        $publicationLine->update($request->all());
        return response()->json($publicationLine);
    }

    public function destroy($id)
    {
        PublicationLine::destroy($id);
        return response()->json(null, 204);
    }
}
