<?php

use App\Http\Controllers\Api\CategoriasController;
use App\Http\Controllers\Api\CentroController;
use App\Http\Controllers\Api\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PreguntaController;
use App\Http\Controllers\Api\ProvinciasController;
use App\Http\Controllers\Api\RolesUsuariosController;
use App\Http\Controllers\Api\UsuarioController;
use App\Http\Resources\UsuarioResource;
use App\Models\Usuario;
use App\Http\Controllers\Api\ResenaController;
use App\Http\Controllers\Api\ResenaRespuestaController;
use App\Http\Controllers\Api\ServicioController;
use App\Http\Controllers\CategoriaController;

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

//Centros.
Route::get('/centros', 'App\Http\Controllers\Api\CentroController@index');
Route::get('/centros/{id}', 'App\Http\Controllers\Api\CentroController@show');
Route::post('/centros', 'App\Http\Controllers\Api\CentroController@store');
Route::put('/centros/{id}', 'App\Http\Controllers\Api\CentroController@update');
Route::delete('/centros/{id}', 'App\Http\Controllers\Api\CentroController@destroy');

//Empresas.
Route::get('/empresas', 'App\Http\Controllers\Api\EmpresaController@index');
Route::get('/empresas/{id}', 'App\Http\Controllers\Api\EmpresaController@show');
Route::post('/empresas', 'App\Http\Controllers\Api\EmpresaController@store');
Route::put('/empresas/{id}', 'App\Http\Controllers\Api\EmpresaController@update');
Route::delete('/empresas/{id}', 'App\Http\Controllers\Api\EmpresaController@destroy');


// Usuarios.
Route::apiResource('usuarios', UsuarioController::class);
Route::post('login', [LoginController::class, 'login']);
Route::apiResource('roles', RolesUsuariosController::class);

// Provincias.
Route::get('provincias', [ProvinciasController::class, 'index']);

// Categorías y servicios.
Route::apiResource('categorias', CategoriasController::class);
Route::apiResource('servicios', ServicioController::class);

Route::apiResource('resena', ResenaController::class);
Route::apiResource('respuestas', ResenaRespuestaController::class)->except(['update']);
