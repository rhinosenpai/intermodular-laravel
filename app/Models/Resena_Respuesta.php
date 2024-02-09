<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resena_Respuesta extends Model
{
    use HasFactory;

    protected $table = 'resena_respuestas';

    public function resena()
    {
        return $this->belongsTo(Resena::class);
    }
}
