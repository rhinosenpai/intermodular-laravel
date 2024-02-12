<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Formulario;

class Pregunta extends Model
{
    use HasFactory;
    protected $table = 'pregunta';

    public function formularios(){
        return $this->belongsToMany(Formulario::class,'formulario_pregunta');
    }
}
