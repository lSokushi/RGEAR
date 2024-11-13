<?php
namespace App\Http\Controllers;

use App\Models\PublicationType;
use Illuminate\Http\Request;

class PublicationTypeController extends Controller
{
    public function index()
    {
        $publicationTypes = PublicationType::all();
        return response()->json($publicationTypes);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        $publicationType = PublicationType::create($request->all());
        return response()->json($publicationType, 201);
    }

    public function show($id)
    {
        $publicationType = PublicationType::findOrFail($id);
        return response()->json($publicationType);
    }

    public function update(Request $request, $id)
    {
        $publicationType = PublicationType::findOrFail($id);
        $publicationType->update($request->all());
        return response()->json($publicationType);
    }

    public function destroy($id)
    {
        PublicationType::destroy($id);
        return response()->json(null, 204);
    }
}
