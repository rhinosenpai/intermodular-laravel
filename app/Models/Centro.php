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
        return $this->hasMany(Usuario::class);
    }
}
