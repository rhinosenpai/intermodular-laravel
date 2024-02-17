<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProvinciasResource;
use App\Models\Provincia;
use Illuminate\Http\Request;

class ProvinciasController extends Controller
{

    public function __construct() {
        $this->middleware(['auth:sanctum']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProvinciasResource::collection(Provincia::all());
    }
}
