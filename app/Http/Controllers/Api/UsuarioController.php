<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Usuario::get(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->name = $request->name;
        $usuario->password = $request->password;
        $usuario->dni = $request->dni;
        $usuario->token = $request->token;
        $usuario->save();
        return response()->json($usuario);
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return $usuario;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $usuario->name = $request->name;
        $usuario->password = $request->password;
        $usuario->dni = $request->dni;
        $usuario->save();
        return response()->json($usuario);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return response()->json($usuario);
    }
}
