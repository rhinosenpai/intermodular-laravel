<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Centro;
use Illuminate\Http\Request;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centros = Centro::all();
        return response()->json($centros);
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
        $centro = new Centro();
        $centro->nombre = $request->nombre;
        $centro->email = $request->email;
        $centro->password = $request->password;
        $centro->direccion = $request->direccion;
        $centro->telefono = $request->telefono;
        $centro->poblacion = $request->poblacion;
        $centro->provincia = $request->provincia;

        $centro->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $centro = Centro::findOrFail($request->id);
        return $centro;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $centro = Centro::findOrFail($request->id);
        $centro->nombre = $request->nombre;
        $centro->email = $request->email;
        $centro->password = $request->password;
        $centro->direccion = $request->direccion;
        $centro->telefono = $request->telefono;
        $centro->poblacion = $request->poblacion;
        $centro->provincia = $request->provincia;

        $centro->save();

        return $centro;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $centro = Centro::destroy($request->id);
        return $centro;
    }
}
