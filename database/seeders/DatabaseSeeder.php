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
        $this->call(FormularioSeeder::class);
        $this->call(PreguntaSeeder::class);
        $this->call(Formulario_PreguntaSeeder::class);
        $this->call(UsuariosSeeder::class);
    }
}
