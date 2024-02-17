<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentroEmpresa extends Model
{
    use HasFactory;

    protected $table = 'centro_empresa';

    protected $fillable = [
        'centro_id',
        'empresa_id',
    ];
}
