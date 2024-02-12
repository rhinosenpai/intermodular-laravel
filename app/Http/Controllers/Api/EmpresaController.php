<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas = Empresa::all();

        $empresasTransformadas = $empresas->map(function ($empresa) {
            return [
                'id' => $empresa->id,
                'nombre' => $empresa->nombre,
                'imagen' => $empresa->imagen,
                'telefono' => $empresa->telefono,
                'correo' => $empresa->correo,
                'direccion' => [
                    'calle' => $empresa->direccion_calle,
                    'provincia' => $empresa->direccion_provincia,
                    'localidad' => $empresa->direccion_localidad,
                    'coordenadas' => [
                        'lat' => +$empresa->direccion_lat,
                        'lng' => +$empresa->direccion_lng
                    ]
                ],
                'categorias' => [],
                'servicios' => [],
                'vacantes' => $empresa->vacantes,
                'horario' => [
                    'inicio' => $empresa->horario_inicio,
                    'fin' => $empresa->horario_fin
                ]
            ];
        });

        return response()->json($empresasTransformadas);
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
    public function show(Request $request)
    {
        $empresa = Empresa::findOrFail($request->id);
        return $empresa;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empresa $empresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresa $empresa)
    {
        //
    }
}
