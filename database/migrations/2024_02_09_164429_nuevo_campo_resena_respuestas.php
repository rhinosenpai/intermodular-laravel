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
        Schema::table('resena_respuestas', function (Blueprint $table) {
            $table->foreignUuid('resena_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('resena_respuestas', function (Blueprint $table) {
            $table->dropColumn('resena_id');
        });
    }
};
