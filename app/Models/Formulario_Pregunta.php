<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario_Pregunta extends Model
{
    use HasFactory;
    protected $table = "formulario_pregunta";

    public function resenas(){
        return $this->hasMany(Resena::class,'formulario_id','formulario_id');
    }
}
