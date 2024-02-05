<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('imagen');
            $table->string('telefono');
            $table->string('correo');
            $table->string('direccion_calle');
            $table->string('direccion_provincia');
            $table->string('direccion_localidad');
            $table->string('direccion_lat');
            $table->string('direccion_lng');
            $table->integer('vacantes');
            $table->time('horario_inicio');
            $table->time('horario_fin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
