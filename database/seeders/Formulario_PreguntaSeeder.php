<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Formulario_Pregunta;
use App\Models\Formulario;

class Formulario_PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $preguntasFormAlumno = collect([1,2,3,4,5,6,7,8,9,10,11]);
        $preguntasFormTutorEmpresa = collect([1,2,3,4,5,6,7,8,9,10,11]);

        $preguntasFormTutorEmpresa->each(function($pregunta) {
            $formulario_pregunta = new Formulario_Pregunta();
            $formulario_pregunta->formulario_id = 2;
            $formulario_pregunta->pregunta_id = $pregunta;
            $formulario_pregunta->save();
        });

        $preguntasFormAlumno->each(function($pregunta) {
            $formulario_pregunta = new Formulario_Pregunta();
            $formulario_pregunta->formulario_id = 1;
            $formulario_pregunta->pregunta_id = $pregunta;
            $formulario_pregunta->save();
        });
    }
}
