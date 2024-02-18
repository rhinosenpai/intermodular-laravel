<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\usuarioRequest;
use App\Http\Resources\UsuarioResource;
use App\Models\Rol;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function __construct() {
        //$this->middleware(['auth', 'roles:centro']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UsuarioResource::collection(Usuario::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(usuarioRequest $request)
    {
        $usuario = new Usuario();
        $rol = Rol::where('tipo', $request->roles)->first();

        if ($rol) {
            $usuario->login = $request->login;
            $usuario->name = $request->name;
            $usuario->password = $request->password;
            $usuario->dni = $request->dni;
            $usuario->telefono = $request->telefono;
            $usuario->token = $request->token;
            $usuario->direccion = $request->direccion;
            $usuario->provincia = $request->provincia;
            $usuario->poblacion = $request->poblacion;
            $usuario->email = $request->email;
            $usuario->save();
            $usuario->roles()->attach($rol->id);
            return response()->json($usuario);
        } else {
            return response()->json(['error' => 'No es posible añadir el usuario']);
        }
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
        $usuario->dni = $request->dni;
        $usuario->email = $request->email;
        $usuario->login = $request->login;
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
