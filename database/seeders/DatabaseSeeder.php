<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Formulario;
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
            Formulario_PreguntaSeeder::class,
            UsuariosSeeder::class,
            RolesSeeder::class,
            RolesUsuariosSeeder::class,
            CategoriasSeeder::class,
            ServiciosSeeder::class,
            ServiciosCategoriasSeeder::class
        ]);
    }
}
