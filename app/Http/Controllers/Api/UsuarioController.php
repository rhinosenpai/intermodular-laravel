<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\usuarioRequest;
use App\Http\Resources\UsuarioResource;
use App\Models\Centro;
use App\Models\Empresa;
use App\Models\Rol;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UsuarioController extends Controller
{
    public function __construct() {
        $this->middleware(['auth:sanctum']);
        $this->middleware(['roles:tutor,centro,empresa,admin'], ['except' => ['store', 'update', 'destroy']]);
        $this->middleware(['roles:centro,admin'], ['only' => ['store', 'update', 'destroy']]);
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

        // Rol es de tipo tutor.
        if ($rol) {
            $usuario->login = $request->login;
            $usuario->name = $request->name;
            $usuario->password = Hash::make($request->password);
            $usuario->dni = $request->dni;
            $usuario->telefono = $request->telefono;
            $usuario->token = $request->token;
            $usuario->direccion = $request->direccion;
            $usuario->provincia = $request->provincia;
            $usuario->poblacion = $request->poblacion;
            $usuario->email = $request->email;
            if ($request->id_centro) {
                $centro = Centro::findOrFail($request->id_centro);
                $usuario->centro()->associate($centro);
            }
            if ($request->id_empresa) {
                $empresa = Empresa::findOrFail($request->id_empresa);
                $usuario->empresa()->associate($empresa);
            }
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
        return new UsuarioResource(Usuario::findOrFail($usuario->id));
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
