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
        Schema::create('jugadors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idequipo');
            $table->foreign('idequipo')->references('id')->on('equipos');            
            $table->string('nombre');         
            $table->string('apellido');
            $table->string('fecha_nacimiento');
            $table->string('nacionalidad');
            $table->string('posicion');
            $table->integer('numero_camiseta');
            $table->string('fecha_contratacion');
            $table->decimal('salario', 12,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugadors');
    }
};
