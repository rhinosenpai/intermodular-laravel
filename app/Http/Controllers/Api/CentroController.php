<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CentroResource;
use App\Models\Centro;
use App\Models\Rol;
use App\Models\Usuario;
use Illuminate\Http\Request;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CentroResource::collection(Centro::all());
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
        $centro->direccion = $request->direccion;
        $centro->telefono = $request->telefono;
        $centro->poblacion = $request->poblacion;
        $centro->password = $request->password;
        $centro->provincia = $request->provincia;

        $centro->save();

        $centroUser = new Usuario();
        $centroUser->name = $request->nombre;
        $centroUser->login = $request->login;
        $centroUser->password = $request->password;
        $centroUser->centro()->associate($centro->id);
        $centroUser->save();

        $rol = Rol::where('tipo', $request->roles)->first();
        $centroUser->roles()->attach($rol->id);
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

/*
INSERT INTO centros (nombre, email, direccion, telefono, poblacion, password, provincia)
VALUES
  ('Centro 1', 'centro1@example.com', 'Dirección 1', '123456789', 'Poblacion 1', 'password1', 'Provincia 1'),
  ('Centro 2', 'centro2@example.com', 'Dirección 2', '987654321', 'Poblacion 2', 'password2', 'Provincia 2'),
  ('Centro 3', 'centro3@example.com', 'Dirección 3', '111222333', 'Poblacion 3', 'password3', 'Provincia 3'),
  ('Centro 4', 'centro4@example.com', 'Dirección 4', '444555666', 'Poblacion 4', 'password4', 'Provincia 4'),
  ('Centro 5', 'centro5@example.com', 'Dirección 5', '777888999', 'Poblacion 5', 'password5', 'Provincia 5'),
  ('Centro 6', 'centro6@example.com', 'Dirección 6', '999888777', 'Poblacion 6', 'password6', 'Provincia 6');

*/
