<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Formulario_Pregunta;

class Formulario_PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $formulario_pregunta = new Formulario_Pregunta();
        $formulario_pregunta->formulario_id = 1;
        $formulario_pregunta->pregunta_id = 1;
        $formulario_pregunta->save();

        $formulario_pregunta2 = new Formulario_Pregunta();
        $formulario_pregunta2->formulario_id = 1;
        $formulario_pregunta2->pregunta_id = 2;
        $formulario_pregunta2->save();

        $formulario_pregunta3 = new Formulario_Pregunta();
        $formulario_pregunta3->formulario_id = 1;
        $formulario_pregunta3->pregunta_id = 3;
        $formulario_pregunta3->save();
    }
}
