<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empresa;

class Centro extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'email', 'password', 'direccion', 'telefono', 'poblacion', 'provincia'];

    public function empresas()
    {
        return $this->belongsToMany(Empresa::class, 'centro_empresa');
    }
    public function usuarios() {
<<<<<<< HEAD
        return $this->hasMany(Usuario::class, 'id_centro');
=======
        return $this->hasMany(Usuario::class);
>>>>>>> 30f95c7b06e529678c66f70ff8f372bd5c6efc6c
    }
}
