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
                    'inicio' => $empresa->hora_inicio,
                    'fin' => $empresa->hora_fin
                ],
                'categorias' => [],
                'servicios' => [],
            ];
        });

        return response()->json($empresasTransformadas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
         $request->validate([
        'nombre' => 'required|string',
        'imagen' => 'required|string',]);
        */
        $empresa = new Empresa();
        $empresa->nombre = $request->nombre;
        $empresa->imagen = $request->imagen;
        $empresa->nota = $request->nota;
        $empresa->cif = $request->cif;
        $empresa->descripcion = $request->descripcion;
        $empresa->telefono = $request->telefono;
        $empresa->email = $request->email;
        $empresa->direccion = $request->direccion;
        $empresa->provincia = $request->provincia;
        $empresa->localidad = $request->localidad;
        $empresa->lat = $request->lat;
        $empresa->lng = $request->lng;
        $empresa->vacantes = $request->vacantes;
        $empresa->hora_inicio = $request->hora_inicio;
        $empresa->hora_fin = $request->hora_fin;

        $empresa->save();

        return response()->json($empresa, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $empresa = Empresa::findOrFail($request->id);

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
                'inicio' => $empresa->hora_inicio,
                'fin' => $empresa->hora_fin
            ],
            'categorias' => [],
            'servicios' => [],
        ];

        return response()->json($empresaTransformada);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $empresa = Empresa::findOrFail($request->id);

        if ($empresa === 0) {
            return response()->json(['error' => 'No se pudo encontrar la empresa'], 404);
        }

        /*$request->validate([
            'nombre' => 'required|string',
            'imagen' => 'required|string',
        ]);*/

        $empresa->nombre = $request->nombre;
        $empresa->imagen = $request->imagen;
        $empresa->nota = $request->nota;
        $empresa->cif = $request->cif;
        $empresa->descripcion = $request->descripcion;
        $empresa->telefono = $request->telefono;
        $empresa->email = $request->email;
        $empresa->direccion = $request->direccion;
        $empresa->provincia = $request->provincia;
        $empresa->localidad = $request->localidad;
        $empresa->lat = $request->lat;
        $empresa->lng = $request->lng;
        $empresa->vacantes = $request->vacantes;
        $empresa->hora_inicio = $request->hora_inicio;
        $empresa->hora_fin = $request->hora_fin;

        $empresa->save();

        return response()->json($empresa, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $empresa = Empresa::destroy($request->id);

        if ($empresa === 0) {
            return response()->json(['error' => 'No se pudo encontrar la empresa a eliminar'], 404);
        }

        return response()->json(['message' => 'Empresa eliminada exitosamente'], 200);
    }
}

/*
INSERT INTO empresas (nombre, imagen, nota, cif, descripcion, telefono, email, direccion, provincia, localidad, lat, lng, vacantes, hora_inicio, hora_fin, created_at, updated_at)
VALUES
('Pixel78 - Estudio Creativo', '../../assets/empresas/pixel78.jpg', 0, 'AB1234567', 'Estudio creativo de diseño gráfico y desarrollo web', '611234567', 'pixel78@gmail.es', 'Maravall, local 5', 'Alicante', 'Benidorm', '38.537711037256074', '-0.13605523324503718', 2, '09:00:00', '17:00:00', NOW(), NOW()),
('NTT DATA', '../../assets/empresas/nttdata_alc.jpg', 0, 'CD2345678', 'Empresa líder en servicios de consultoría y tecnología de la información', '622345678', 'nttdata@gmail.es', 'Calle Esperanza', 'Alicante', 'San Juan de Alicante', '38.37043912215425', '-0.421121748597903', 7, '08:00:00', '16:00:00', NOW(), NOW()),
('Centauro', '../../assets/empresas/centauro.jpg', 0, 'EF3456789', 'Especialistas en soluciones de software a medida para empresas', '633456789', 'centauro@gmail.es', 'Calle La Font 3', 'Alicante', 'Benidorm', '38.534589098211455', '-0.10686578906574488', 1, '09:00:00', '17:00:00', NOW(), NOW()),
('Indra', '../../assets/empresas/indra.jpeg', 0, 'GH4567890', 'Empresa de consultoría global y tecnología avanzada', '644567890', 'indra@gmail.es', 'Calle Principal 4', 'Valencia', 'Valencia', '39.473010440047936', '-0.35454601476671105', 1, '09:00:00', '16:00:00', NOW(), NOW()),
('NTT DATA', '../../assets/empresas/nttdata_vlc.jpg', 0, 'IJ5678901', 'Empresa de servicios de tecnologías de la información y la comunicación', '655678901', 'nttdata2@gmail.es', 'Calle Finlandia 5', 'Valencia', 'Valencia', '39.49218952816786', '-0.40140106929523267', 3, '08:00:00', '14:00:00', NOW(), NOW()),
('Accenture', '../../assets/empresas/accenture.jpg', 0, 'KL6789012', 'Empresa global de consultoría líder en servicios profesionales', '666789012', 'accenture@gmail.es', 'Calle Principal 6', 'Valencia', 'Valencia', '39.467924464094125', '-0.38088048670515023', 1, '08:30:00', '14:30:00', NOW(), NOW()),
('Telefónica', '../../assets/empresas/telefonica.jpeg', 0, 'MN7890123', 'Empresa multinacional de telecomunicaciones y servicios', '677890123', 'telefonica@gmail.es', 'Calle Principal 7', 'Castellón', 'Villarreal', '39.46907830373499', '-0.37592946813395617', 1, '09:00:00', '17:00:00', NOW(), NOW()),
('MediaMarkt', '../../assets/empresas/mediamrkt.jpg', 0, 'OP8901234', 'Empresa líder en productos electrónicos y electrodomésticos', '688901234', 'mediamarkt@gmail.es', 'Calle Principal 8', 'Castellón', 'Peñíscola', '40.45574380831745', '0.45067853802779617', 2, '09:30:00', '17:30:00', NOW(), NOW());

*/
