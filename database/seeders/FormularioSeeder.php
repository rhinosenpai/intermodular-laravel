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
        $formulario->nombre = "nombre1";
        $formulario->descripcion = "descripcion1";
        $formulario->tipo = "tipado1";
        $formulario->save();

        $formulario1 = new Formulario();
        $formulario1->nombre = "nombre2";
        $formulario1->descripcion = "descripcion2";
        $formulario1->tipo = "tipado2";
        $formulario1->save();

        $formulario2 = new Formulario();
        $formulario2->nombre = "nombre3";
        $formulario2->descripcion = "descripcion3";
        $formulario2->tipo = "tipado3";
        $formulario2->save();
    }
}
