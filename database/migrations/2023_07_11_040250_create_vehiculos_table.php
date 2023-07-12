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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('placa', 6)->unique();
            $table->string('marca', 100);
            $table->string('modelo', 50);
            $table->string('version', 50);
            $table->string('color', 50);
            $table->integer('numPuestos');
            $table->integer('numPuertas');
            $table->string('combustible', 10);
            $table->integer('kilometros');
            $table->integer('cilindraje');
            $table->integer('categoria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
