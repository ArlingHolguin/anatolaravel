<?php

namespace App\Http\Controllers;

use App\Models\Agencia;
use Illuminate\Http\Request;

class agenciaController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agencias  = Agencia::with('getChildren')->first(); 
        dd($agencias);
        return view('agencias.index', compact('agencias'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $agencia = Agencia::findorfail($id);
        return view('agencias.edit', compact('agencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
