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
        Schema::create('cuentas', function (Blueprint $table) {
            $table->id('cod_cuenta');
            $table->unsignedBigInteger('cod_cliente');
            $table->unsignedBigInteger('cod_tipo_cuenta');
            $table->decimal('saldo',10,2);
            $table->date('fecha_de_apertura');
            $table->unsignedBigInteger('cod_estado_cuenta');
            $table->foreign('cod_cliente')->references('cod_cliente')->on('clientes');
            $table->foreign('cod_tipo_cuenta')->references('cod_tipo_cuenta')->on('tipo_cuentas');
            $table->foreign('cod_estado_cuenta')->references('cod_estado_cuenta')->on('estados_cuenta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuentas');
    }
};
