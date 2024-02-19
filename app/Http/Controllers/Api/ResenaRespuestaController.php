<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Resena_Respuesta;
use App\Models\Resena;
use Illuminate\Http\Request;

class ResenaRespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $respuesta = Resena_Respuesta::get();
        return response()->json($respuesta,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        foreach ($request->preguntas as $pregunta => $respuestas){
            $respuesta = new Resena_Respuesta();
            $respuesta->resena()->associate(Resena::findOrFail($request->id)->id);
            
            $respuesta->valor = $respuestas;
            $respuesta->pregunta_id = $pregunta;
            $respuesta->save();
        }
        return response()->json($respuesta,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Resena_Respuesta $resena_Respuesta)
    {
        return response()->json($resena_Respuesta,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resena_Respuesta $resena_Respuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resena_Respuesta $resena_Respuesta)
    {
        $resena_Respuesta->delete();
        return response()->json($resena_Respuesta);
    }
}
