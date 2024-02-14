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
            $table->integer('nota');
            $table->string('cif');
            $table->string('descripcion');
            $table->string('telefono');
            $table->string('email');
            $table->string('direccion');
            $table->string('provincia');
            $table->string('localidad');
            $table->string('lat');
            $table->string('lng');
            $table->integer('vacantes');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_empresas');
    }
};
