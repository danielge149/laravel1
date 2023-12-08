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
        Schema::create('estudiante', function (Blueprint $table) {
            $table->string('codestudiante',2);
            $table->string('nomestudiante',100);
            $table->Integer('edadestudiante');
            $table->date('fechaestudiante');
            $table->string('sexestudiante',1);
            $table->string('ciudad',2);
            $table->foreign('ciudad')->references('codciudad')->on('ciudad');
            $table->string('barrio',2);
            $table->foreign('barrio')->references('codbarrio')->on('barrio');
            $table->string('programa',2);
            $table->foreign('programa')->references('codprograma')->on('programa');
            $table->primary('codestudiante');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiante');
    }
};
