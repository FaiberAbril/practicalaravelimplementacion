<?php

namespace App\Http\Controllers;

use App\Models\equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipos = equipo::all();
        return view('equipo.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipo.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required|min:3|max:255',
            'ciudad' => 'required|min:3|max:255',
            'pais' => 'min:3|max:255',
            'fundacion' => 'min:3|max:255',
            'liga' => 'required|min:3|max:255',
        ]);


        equipo::create($request->all());
        return redirect()->route('equipo.index')->with('success', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(equipo $equipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $equipo = equipo::find($id);
        return view('equipo.editar', compact('equipo'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $equipo = equipo::find($id);
        $equipo->update($request->all());
        return redirect()->route('equipo.index')->with('success', 'Registro Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $equipo = equipo::find($id);
        $equipo->delete();
        return redirect()->route('equipo.index')->with('success', 'Registro eliminado correctamente');
    }
}
