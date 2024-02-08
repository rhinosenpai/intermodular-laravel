<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Servicio;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categorias';

    public function servicios() {
        return $this->belongsToMany(Servicio::class);
    }
}
