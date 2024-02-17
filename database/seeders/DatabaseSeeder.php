<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Formulario;
use App\Models\Resena;
use App\Models\Resena_Respuesta;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsuariosSeeder::class,
            FormularioSeeder::class,
            PreguntaSeeder::class,
<<<<<<< HEAD
=======
            Formulario_PreguntaSeeder::class,
>>>>>>> 30f95c7b06e529678c66f70ff8f372bd5c6efc6c
            UsuariosSeeder::class,
            RolesSeeder::class,
            RolesUsuariosSeeder::class,
            CategoriasSeeder::class,
            ServiciosSeeder::class,
            ServiciosCategoriasSeeder::class,
            ResenaSeeder::class,
<<<<<<< HEAD
            Resena_RespuestaSeeder::class,
            ProvinciasSeeder::class,
            PoblacionesSeeder::class
=======
            Resena_RespuestaSeeder::class
>>>>>>> 30f95c7b06e529678c66f70ff8f372bd5c6efc6c
        ]);

    }
}
