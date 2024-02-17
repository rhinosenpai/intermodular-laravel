<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poblacion extends Model
{
    use HasFactory;
    protected $table = 'poblaciones';

    public function provincia() {
        return $this->belongsTo(Provincia::class, 'id_provincia');
    }
}
