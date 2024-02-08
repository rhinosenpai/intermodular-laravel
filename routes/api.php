<?php

use App\Http\Controllers\Api\CentroController;
use App\Http\Controllers\Api\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PreguntaController;
use App\Http\Controllers\Api\RolesUsuariosController;
use App\Http\Controllers\Api\UsuarioController;
use App\Http\Resources\UsuarioResource;
use App\Models\Usuario;
use App\Http\Controllers\Api\ResenaController;
use App\Http\Controllers\Api\ResenaRespuestaController;
use App\Http\Controllers\Api\PreguntaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/



Route::get('/empresas', 'App\Http\Controllers\Api\EmpresaController@index');
Route::get('/empresas/{id}', 'App\Http\Controllers\Api\EmpresaController@show');


// Usuarios.
Route::apiResource('usuarios', UsuarioController::class);
Route::post('login', [LoginController::class, 'login']);
Route::apiResource('roles', RolesUsuariosController::class);

// Centros.
Route::apiResource('centros', CentroController::class);



Route::apiResource('resena', ResenaController::class);
Route::apiResource('respuestas', ResenaRespuestaController::class)->except(['update']);