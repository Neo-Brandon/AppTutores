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
        Schema::create('reportes_incidencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_tutor')->constrained('users');
            $table->foreignId('id_alumno')->constrained('users');
            $table->text('descripcion');
            $table->dateTime('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes_incidencias');
    }
};
