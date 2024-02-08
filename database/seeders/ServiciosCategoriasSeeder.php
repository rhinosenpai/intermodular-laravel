<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Servicio;
use App\Models\ServiciosCategorias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiciosCategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = Categoria::all();
        $servicios = Servicio::all();

        $categorias->each(function($categoria) use($servicios) {
            $servicios->each(function($servicio) use($categoria) {
                $servicios_categoria = new ServiciosCategorias();
                $servicios_categoria->servicio_id = $servicio->id;
                $servicios_categoria->categoria_id = $categoria->id;
                $servicios_categoria->save();
            });
        });
    }
}
