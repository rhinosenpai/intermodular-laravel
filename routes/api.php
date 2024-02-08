<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/centros', 'App\Http\Controllers\Api\CentroController@index'); //mostrar todos los registros de centros
Route::get('/centros/{id}', 'App\Http\Controllers\Api\CentroController@show'); //mostrar un registro especifico
Route::post('/centros', 'App\Http\Controllers\Api\CentroController@store'); //crear un registro
Route::put('/centros/{id}', 'App\Http\Controllers\Api\CentroController@update'); //actualizar un registro
Route::delete('/centros/{id}', 'App\Http\Controllers\Api\CentroController@destroy'); //eliminar un registro
