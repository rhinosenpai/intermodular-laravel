<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Resena;
use Illuminate\Http\Request;
use App\Models\Formulario_Pregunta;
use App\Models\Pregunta;

class ResenaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resena = Resena::get();
        return response()->json($resena, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $form = Formulario::findOrFail($request->formulario_id);
            $centroemp = CentroEmpresa::findOrFail($request->centroempresa_id);
            $resena = new Resena();
            $resena->formularios()->associate($form);
            $resena->centroEmpresas()->associate($centroemp);
            $resena->save();
            return response()->json($resena, 201);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            return response()->json(['error' => 'No se ha podido crear el formulario.'], 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Resena $resena)
    {
        return response()->json($resena, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resena $resena)
    {
        $resena->fechaRespuesta = Carbon::now();
        return response()->json($resena,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resena $resena)
    {
        $resena->delete();
        return response()->json($resena);
    }
}
