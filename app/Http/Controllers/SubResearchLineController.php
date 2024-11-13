<?php

namespace App\Http\Controllers;

use App\Models\SubResearchLine;
use Illuminate\Http\Request;

class SubResearchLineController extends Controller
{
    public function index()
    {
        $subResearchLines = SubResearchLine::paginate(10); // Adiciona paginação
        return response()->json($subResearchLines);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'line_id' => 'required|exists:research_lines,id',
        ]);

        $subResearchLine = SubResearchLine::create($request->validated()); // Usa dados validados
        return response()->json($subResearchLine, 201);
    }

    public function show($id)
    {
        $subResearchLine = SubResearchLine::findOrFail($id);
        return response()->json($subResearchLine);
    }

    public function update(Request $request, $id)
    {
        $subResearchLine = SubResearchLine::findOrFail($id);

        $request->validate([
            'name' => 'sometimes|required|string|max:100',
            'line_id' => 'sometimes|required|exists:research_lines,id',
        ]);

        $subResearchLine->update($request->validated()); // Usa dados validados
        return response()->json($subResearchLine);
    }

    public function destroy($id)
    {
        SubResearchLine::destroy($id);
        return response()->json(null, 204);
    }
}
