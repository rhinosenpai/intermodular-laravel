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
        $roles = $usuario->roles()->get();
        if (!$usuario || !Hash::check($request->password, $usuario->password)) {
            return response()->json(['error' => 'Credenciales no válidas'], 401);
        } else {
            return response()->json([
                'accessToken' => $usuario->createToken($usuario->login)->plainTextToken,
                'login' => $usuario->login,
                'roles' => $roles
            ]);
        }
    }
}
