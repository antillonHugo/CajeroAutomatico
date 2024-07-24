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
        Schema::create('tarjetas', function (Blueprint $table) {
            $table->id('cod_tarjeta');
            $table->unsignedBigInteger('cod_cuenta');
            $table->unsignedBigInteger('cod_tipo_tarjeta');
            $table->date('fecha_vencimiento');
            $table->integer('CVV');
            $table->foreign('cod_cuenta')->references('cod_cuenta')->on('cuentas');
            $table->foreign('cod_tipo_tarjeta')->references('cod_tipo_tarjeta')->on('tipo_tarjetas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarjetas');
    }
};
