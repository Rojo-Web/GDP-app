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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id()->unique()->primary();
            $table->string('nombre');
            $table->string('estado');
            $table->text('descripcion');
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->string('user_id')->nullable(); // Definición de la columna responsable_id
            $table->foreign('user_id')->references('cedula')->on('users')->OnDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
