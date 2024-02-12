<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pregunta;

class Formulario extends Model
{
    use HasFactory;
    protected $table = 'formulario';

    public function preguntas(){
        return $this->belongsToMany(Pregunta::class,'formulario_pregunta');
    }
}
