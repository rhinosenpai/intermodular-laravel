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
<<<<<<< HEAD
        return $this->belongsTo(Formulario::class,'formulario_id','id');
=======
        return $this->belongsTo(Formulario_Pregunta::class,'formulario_id');
>>>>>>> 30f95c7b06e529678c66f70ff8f372bd5c6efc6c
    }

    public function respuestas()
    {
        return $this->hasMany(Resena_Respuesta::class);
    }

<<<<<<< HEAD
    public function centroEmpresas()
    {
        return $this->hasOne(centroEmpresa::class, 'id','centroempresa_id');
=======
    public function centrosEmpresas()
    {
        return $this->hasOne();
>>>>>>> 30f95c7b06e529678c66f70ff8f372bd5c6efc6c
    }
}
