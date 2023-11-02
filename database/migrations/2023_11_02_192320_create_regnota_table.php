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
        Schema::create('regnota', function (Blueprint $table) {
            $table->string('estudiante',2);
            $table->foreign('estudiante')->references('codestudiante')->on('estudiante');
            $table->string('materia',2);
            $table->foreign('materia')->references('codmateria')->on('materia');
            $table->string('profesor',2);
            $table->foreign('profesor')->references('codprofesor')->on('profesor');
            $table->float('parcial1');
            $table->float('parcial2');
            $table->float('efinal');
            $table->float('nfinal');
            $table->char('estado',1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regnota');
    }
};
