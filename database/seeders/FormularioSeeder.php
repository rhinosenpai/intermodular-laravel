<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Formulario;

class FormularioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $formulario = new Formulario();
        $formulario->nombre = "FormularioAlumnado";
        $formulario->descripcion = "Formulario para la reseña del alumno hacia la empresa.";
        $formulario->tipo = "Alumno";
        $formulario->save();

        $formulario1 = new Formulario();
        $formulario1->nombre = "FormularioTutorEmpresa";
        $formulario1->descripcion = "Formulario para la reseña del tutor de la empresa hacia el alumno.";
        $formulario1->tipo = "Empresa";
        $formulario1->save();

        $formulario2 = new Formulario();
        $formulario2->nombre = "nombre3";
        $formulario2->descripcion = "descripcion3";
        $formulario2->tipo = "tipado3";
        $formulario2->save();
    }
}
