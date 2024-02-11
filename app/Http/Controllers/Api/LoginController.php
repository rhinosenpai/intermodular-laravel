<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function login(Request $request) {
        $usuario = Usuario::where('login', $request->login)->first();
        if (!$usuario || !Hash::check($request->password, $usuario->password)) {
            return response()->json(['error' => 'Credenciales no válidas'], 401);
        } else {
            $roles = $usuario->roles()->pluck('tipo');
            return response()->json([
                'accessToken' => $usuario->createToken($usuario->login)->plainTextToken,
                'login' => $usuario->login,
                'roles' => $roles,
                'id_centro' => $usuario->id_centro,
                'id_empresa' => $usuario->id_empresa
            ]);
        }
    }
}
