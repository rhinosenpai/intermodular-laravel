<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Resena extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'resena';

    public function formularios()
    {
        return $this->belongsTo(Formulario::class,'formulario_id','id');
    }

    public function respuestas()
    {
        return $this->hasMany(Resena_Respuesta::class);
    }

    public function centroEmpresas()
    {
        return $this->belongsTo(CentroEmpresa::class, 'centroempresa_id', 'id');
    }
}
