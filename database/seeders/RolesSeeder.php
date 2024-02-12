<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new Rol();
        $admin->tipo = 'admin';
        $admin->save();

        $centro = new Rol();
        $centro->tipo = 'centro';
        $centro->save();

        $empresa = new Rol();
        $empresa->tipo = 'empresa';
        $empresa->save();

        $tutor = new Rol();
        $tutor->tipo = 'tutor';
        $tutor->save();
    }
}
