<?php

namespace Database\Seeders;

use App\Models\Rol;
use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RolesUsuarios;

class RolesUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios = Usuario::all();
        $roles = Rol::all();

        $usuarios->each(function($usuario) use($roles) {
            $roles->each(function($rol) use($usuario) {
                $roles_usuario = new RolesUsuarios();
                $roles_usuario->usuario_id = $usuario->id;
                $roles_usuario->rol_id = $rol->id;
                $roles_usuario->save();
                $usuario->rol = $rol->tipo;
                $usuario->save();
            });
        });
    }
}
