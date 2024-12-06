<?php

namespace App\Http\Controllers;

use App\Models\Agencia;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $agencias  = Agencia::where('type', 'Principal')->with('getChildren')->get();
        
        return view('agencias.index', compact('agencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
         $agencia = Agencia::findOrFail($id);
        return view('agencias.edit', compact('agencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Buscar la agencia por ID o lanzar un 404 si no se encuentra
    $agencia = Agencia::findOrFail($id);

    // Validar los datos de entrada
    $validatedData = $request->validate([
        'name' => 'required|string|max:255', 
        'nit' => 'required|integer|unique:agencias,nit,' . $id, 
        'type' => 'required|in:Principal,Sucursal',   
    ]);

    // Actualizar los datos de la agencia
    $agencia->update($validatedData);

    // Redirigir al listado de agencias con un mensaje de éxito
    return redirect()->route('agencias.index')->with('success', 'Agencia actualizada correctamente.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
