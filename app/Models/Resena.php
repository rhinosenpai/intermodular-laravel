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
        return $this->belongsTo(Formulario_Pregunta::class,'formulario_id');
    }

    public function respuestas()
    {
        return $this->hasMany(Resena_Respuesta::class);
    }

    public function centrosEmpresas()
    {
        return $this->hasOne();
    }
}
