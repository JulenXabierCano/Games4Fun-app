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
        Schema::create('salas', function (Blueprint $table) {
            $table->id();
            $table->string('jugador_1');
            $table->string('jugador_2')->nullable();
            $table->string('movimiento_j1')->nullable();
            $table->string('movimiento_j2')->nullable();
            $table->string('mensaje_j1')->nullable();
            $table->string('mensaje_j2')->nullable();
            $table->string('privada')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salas');
    }
};
