<?php

use App\Http\Controllers\Api\CentroController;
use App\Http\Controllers\Api\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PreguntaController;
<<<<<<< HEAD
use App\Http\Controllers\Api\ProvinciasController;
=======
>>>>>>> 30f95c7b06e529678c66f70ff8f372bd5c6efc6c
use App\Http\Controllers\Api\RolesUsuariosController;
use App\Http\Controllers\Api\UsuarioController;
use App\Http\Resources\UsuarioResource;
use App\Models\Usuario;
use App\Http\Controllers\Api\ResenaController;
use App\Http\Controllers\Api\ResenaRespuestaController;

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
});*/
<<<<<<< HEAD
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

Route::apiResource('resena', ResenaController::class);
Route::apiResource('respuestas', ResenaRespuestaController::class)->except(['update']);

=======
//Reseña


//Empresas
Route::get('/empresas', 'App\Http\Controllers\Api\EmpresaController@index');
Route::get('/empresas/{id}', 'App\Http\Controllers\Api\EmpresaController@show');

Route::apiResource('preguntas', PreguntaController::class);

// Usuarios.
Route::apiResource('usuarios', UsuarioController::class);
Route::post('login', [LoginController::class, 'login']);
Route::apiResource('roles', RolesUsuariosController::class);

// Centros.
Route::apiResource('centros', CentroController::class);




Route::apiResource('resena', ResenaController::class);
Route::apiResource('respuestas', ResenaRespuestaController::class)->except(['update']);
>>>>>>> 30f95c7b06e529678c66f70ff8f372bd5c6efc6c
