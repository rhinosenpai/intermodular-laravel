<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
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
        return Servicio::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servicio $servicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicio $servicio)
    {
        //
    }
}
