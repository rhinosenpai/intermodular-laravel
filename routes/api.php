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

/*
Route::get('/centros', 'App\Http\Controllers\Api\CentroController@index');
Route::get('/centros/{id}', 'App\Http\Controllers\Api\CentroController@show');
Route::post('/centros', 'App\Http\Controllers\Api\CentroController@store');
Route::put('/centros/{id}', 'App\Http\Controllers\Api\CentroController@update');
Route::delete('/centros/{id}', 'App\Http\Controllers\Api\CentroController@destroy');
*/

Route::get('/empresas', 'App\Http\Controllers\Api\EmpresaController@index');
Route::get('/empresas/{id}', 'App\Http\Controllers\Api\EmpresaController@show');

Route::apiResource('preguntas', PreguntaController::class);

// Usuarios.
Route::apiResource('usuarios', UsuarioController::class);
Route::post('login', [LoginController::class, 'login']);
Route::apiResource('roles', RolesUsuariosController::class);

// Centros.
Route::apiResource('centros', CentroController::class);
