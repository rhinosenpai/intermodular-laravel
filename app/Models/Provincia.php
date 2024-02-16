<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;
    protected $table = 'provincias';

    public function poblaciones() {
        return $this->hasMany(Poblacion::class, 'id_provincia');
    }
}
