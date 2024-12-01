<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        return Cliente::all();
    }

    public function show($id)
    {
        return Cliente::findOrFail($id);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes, email',
            'telefone' => 'required|string',
            'data_nascimento' => 'required|date',
            'endereco' => 'required|string',
        ]);
    
        $cliente = Cliente::create($validatedData);
        return response()->json($cliente, 201);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $request->validate([
            'nome' => 'string',
            'email' => 'email|unique:clientes,email,' . $id,
        ]);

        $cliente->update($request->all());

        return $cliente;
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return response()->json(null, 204);
    }
}
