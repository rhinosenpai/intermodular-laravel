<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Formulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $form = Formulario::get();
        return response()->json($form,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form = new Formulario();
        $form->nombre = $request->nombre;
        $form->descripcion = $request->descripcion;
        $form->tipo = $request->tipo;
        $form->save();
        return response()->json($form, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Formulario $formulario)
    {
        return response()->json(['nombre' => $formulario->nombre,
        'descripcion' => $formulario->descripcion,
        'tipo' => $formulario->tipo ],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formulario $formulario)
    {
        $formulario->nombre = $request->nombre;
        $formulario->descripcion = $request->descripcion;
        $formulario->tipo = $request->tipo;
        $formulario->save();
        return response()->json($formulario,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formulario $formulario)
    {
        $formulario->delete();
        return response()->json($formulario,200);
    }
}
