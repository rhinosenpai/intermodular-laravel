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
        Schema::create('centros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('poblacion');
            $table->string('provincia');
            $table->timestamps();
        });

        Schema::create('centro_empresa', function (Blueprint $table) {
            $table->id();

            $table->foreignId('centro_id')
            ->constrained('centros');

            $table->foreignId('empresa_id')
            ->constrained('empresas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centro_empresa');
        Schema::dropIfExists('centros');
    }
};
