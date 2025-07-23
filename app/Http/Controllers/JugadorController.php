<?php

namespace App\Http\Controllers;

use App\Models\equipo;
use App\Models\jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $jugadores = jugador::all();
        return view('jugador.index', compact('jugadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipos= equipo::all();
        return view('jugador.crear', compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        jugador::create($request->all());
        return redirect()->route('jugador.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(jugador $jugador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $jugador = jugador::find($id);
         $equipos = equipo::all();
        return view('jugador.editar', compact('jugador','equipos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jugador=jugador::find($id);
        $jugador->update($request->all());
        return redirect()->route('jugador.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jugador = jugador::find($id);
        $jugador->delete();
        return redirect()->route('jugador.index'); 

    }
}
