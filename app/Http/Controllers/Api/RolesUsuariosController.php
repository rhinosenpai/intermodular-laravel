<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RolesUsuarios;
use Illuminate\Http\Request;

class RolesUsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(RolesUsuarios::get(), 200);
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
    public function show(RolesUsuarios $rolesUsuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RolesUsuarios $rolesUsuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RolesUsuarios $rolesUsuarios)
    {
        //
    }
}
