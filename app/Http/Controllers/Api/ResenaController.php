<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Resena;
use Illuminate\Http\Request;
use App\Models\Formulario_Pregunta;
use App\Models\Pregunta;
use App\Models\Formulario;
use App\Models\CentroEmpresa;
use App\Models\Empresa;
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
        $empresa =Empresa::findOrFail($resena->centroEmpresas->empresa_id);
        if ($empresa === 0) {
            return response()->json(['error' => 'No se pudo encontrar la empresa'], 404);
        }

        $empresaTransformada = [
            'id' => $empresa->id,
            'nombre' => $empresa->nombre,
            'imagen' => $empresa->imagen,
            'nota' => $empresa->nota,
            'cif' => $empresa->cif,
            'descripcion' => $empresa->descripcion,
            'telefono' => $empresa->telefono,
            'email' => $empresa->email,
            'ubicacion' => [
                'direccion' => $empresa->direccion,
                'provincia' => $empresa->provincia,
                'localidad' => $empresa->localidad,
                'coordenadas' => [
                    'lat' => +$empresa->lat,
                    'lng' => +$empresa->lng
                ]
            ],
            'vacantes' => $empresa->vacantes,
            'horario' => [
                'inicio' => substr($empresa->hora_inicio, 0, -3),
                'fin' => substr($empresa->hora_fin, 0, -3)
            ],
            'categorias' => [],
            'servicios' => [],
        ];

    return response()->json([
            "id" => $resena->id,
            "formulario_id" => $resena->formulario_id,
            "empresa" => $empresaTransformada,
            "preguntas"=>$resena->formularios->preguntas,
            "a"=>77
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
