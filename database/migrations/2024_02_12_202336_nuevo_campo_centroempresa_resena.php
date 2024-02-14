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
        Schema::table('resena', function (Blueprint $table) {
            $table->unsignedBigInteger('centroempresa_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('resena', function (Blueprint $table) {
            $table->dropColumn('centroempresa_id');
        });
    }
};
