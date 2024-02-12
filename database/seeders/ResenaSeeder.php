<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resena;
use App\Models\Formulario_Pregunta;

class ResenaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $forms = Formulario_Pregunta::select('formulario_id')->distinct()->get();
        $forms->each(function($form)
        {
            Resena::factory()->count(5)->create(['formulario_id' => $form->formulario_id]);
        });
    }
}
