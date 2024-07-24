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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('cod_cliente');
            $table->string('primer_nombre',25);
            $table->string('segundo_nombre',25);
            $table->string('primer_apellido',25);
            $table->string('segundo_apellido',25);
            $table->string('dui',10);
            $table->date('fecha_de_nacimiento');
            $table->string('celular',15);
            $table->string('correo',50); 
            $table->unsignedBigInteger('cod_pais');
            $table->unsignedBigInteger('cod_departamento');
            $table->unsignedBigInteger('cod_municipio');
            $table->foreign('cod_pais')->references('cod_pais')->on('paises');
            $table->foreign('cod_departamento')->references('cod_departamento')->on('departamentos');
            $table->foreign('cod_municipio')->references('cod_municipio')->on('municipios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
