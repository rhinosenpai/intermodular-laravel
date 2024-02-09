<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resena;
use App\Models\Resena_Respuesta;

class Resena_RespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
       $resenas = Resena::all();
        $resenas->each(function($resena)
        {
            $resena->formularios->each(function($r) use ($resena)
            {
                Resena_Respuesta::factory()->count(1)->create(['pregunta_id' => $r->pregunta_id,'resena_id' =>$resena->id]);
            });
        });
    }
}
