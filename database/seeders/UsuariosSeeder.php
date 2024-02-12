<?php

namespace Database\Seeders;

use App\Models\Rol;
use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        return Usuario::factory()->count(5)->create();
        /*
        $usuario = new Usuario();
        $usuario->name = 'Cristian';
        $usuario->password = '1234';
        $usuario->dni = '12345678A';
        $usuario->save();
        $rol = new Rol();
        $rol->tipo = 'admin';
        $rol->usuarios()->associate($usuario);
        $rol->save();
        */
    }
}
