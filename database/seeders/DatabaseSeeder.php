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
        $this->call(FormularioSeeder::class);
        $this->call(PreguntaSeeder::class);
        $this->call(Formulario_PreguntaSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(ResenaSeeder::class);
        $this->call(Resena_RespuestaSeeder::class);
        $this->call(UsuariosSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
