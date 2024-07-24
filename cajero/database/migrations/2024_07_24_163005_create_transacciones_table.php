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
        Schema::create('transacciones', function (Blueprint $table) {
            $table->id('cod_transaccion');
            $table->unsignedBigInteger('cod_cuenta');
            $table->unsignedBigInteger('cod_estado_transaccion');
            $table->unsignedBigInteger('cod_tipo_transaccion');
            $table->decimal('monto',10,2);
            $table->date('fecha_transaccion');
            $table->foreign('cod_cuenta')->references('cod_cuenta')->on('cuentas');
            $table->foreign('cod_estado_transaccion')->references('cod_estado_transaccion')->on('estado_transaccion');
            $table->foreign('cod_tipo_transaccion')->references('cod_tipo_transaccion')->on('tipos_transacciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacciones');
    }
};
