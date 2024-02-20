<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoriasResource;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
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
        return CategoriasResource::collection(Categoria::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
        return $categoria;
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        return new CategoriasResource(Categoria::findOrFail($categoria->id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->servicios()->sync($request->serviciosIds);
        $categoria->save();
        return $categoria;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return response()->json($categoria);
    }
}
