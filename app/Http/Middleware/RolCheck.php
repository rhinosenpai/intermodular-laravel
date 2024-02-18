<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class RolCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (auth()->user()) {
            $rolesUsuario = auth()->user()->roles->pluck('tipo');
            foreach($roles as $rol) {
                if (in_array($rol, $rolesUsuario->toArray())) {
                    return $next($request);
                }
            }
            return response()->json(['error' => 'No tiene permisos para realizar dicha acción'], 401);
        } else {
            return response()->json(['error' => 'Ha habido un error'], 500);
        }
    }
}
