<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'imagen', 'telefono', 'correo', 'direccion_calle', 'direccion_provincia', 'direccion_localidad', 'direccion_lat', 'direccion_lng', 'categorias', 'servicios', 'vacantes', 'horario_inicio', 'horario_fin'];

    public function centros()
    {
        return $this->belongsToMany(Centro::class);
    }
}
