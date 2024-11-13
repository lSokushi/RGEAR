<?php
namespace App\Http\Controllers;

use App\Models\Phone;
use App\Http\Requests\StorePhoneRequest;
use App\Http\Requests\UpdatePhoneRequest;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PhoneController extends Controller
{
    // Lista todos os telefones
    public function index(Request $request)
    {
        $phones = Phone::all();

        if ($request->wantsJson()) {
            return response()->json($phones);
        }

        return view('phones.index', compact('phones'));
    }

    // Armazena um novo telefone
    public function store(StorePhoneRequest $request)
    {
        $phone = Phone::create($request->validated());

        return response()->json($phone, 201);
    }

    // Mostra um telefone específico
    public function show($id, Request $request)
    {
        try {
            $phone = Phone::findOrFail($id);

            if ($request->wantsJson()) {
                return response()->json($phone);
            }

            return view('phones.show', compact('phone'));
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Phone not found'], 404);
        }
    }

    // Atualiza um telefone específico
    public function update(UpdatePhoneRequest $request, $id)
    {
        try {
            $phone = Phone::findOrFail($id);
            $phone->update($request->validated());

            return response()->json($phone);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Phone not found'], 404);
        }
    }

    // Exclui um telefone específico
    public function destroy($id)
    {
        try {
            $phone = Phone::findOrFail($id);
            $phone->delete();

            return response()->json(null, 204);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Phone not found'], 404);
        }
    }
}
