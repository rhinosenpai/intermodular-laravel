<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Resena;
use Illuminate\Http\Request;
use App\Models\Formulario_Pregunta;
use App\Models\Pregunta;
use App\Models\Formulario;
use App\Models\CentroEmpresa;
use Carbon\Carbon;

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
        $form = Formulario::findOrFail($request->formulario_id);
        $centroemp = CentroEmpresa::findOrFail($request->centroempresa_id);
        $resena = new Resena();
        $resena->formularios()->associate($form);
        $resena->centroEmpresas()->associate($centroemp);
        $resena->save();
        
        
        return response()->json(['id'=>$resena->id], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Resena $resena)
    {   
    return response()->json([
            "id" => $resena->id,
            "formulario_id" => $resena->formulario_id,
            "empresa_id" => $resena->centroEmpresas->empresa_id,
            "preguntas"=>$resena->formularios->preguntas
        ], 200);
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
