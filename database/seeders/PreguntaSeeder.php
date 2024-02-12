<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pregunta;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pregunta = new Pregunta();
        $pregunta->titulo = "hola";
        $pregunta->orden = 1;
        $pregunta->save();

        $pregunta1 = new Pregunta();
        $pregunta1->titulo = "adios";
        $pregunta1->orden = 1;
        $pregunta1->save();

        $pregunta2 = new Pregunta();
        $pregunta2->titulo = "holadios";
        $pregunta2->orden = 1;
        $pregunta2->save();
    }
}
