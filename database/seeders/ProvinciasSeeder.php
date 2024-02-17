<?php

namespace Database\Seeders;

use App\Models\Provincia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alicante = new Provincia();
        $alicante->nombre = 'Alicante';
        $alicante->save();

        $castellon = new Provincia();
        $castellon->nombre = 'Castellon';
        $castellon->save();

        $valencia = new Provincia();
        $valencia->nombre = 'Valencia';
        $valencia->save();
    }
}
