<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente');
            $table->date('fecha');
            $table->string('nombre_beneficiario');
            $table->unsignedBigInteger('id_banco');
            $table->integer('tipo_tarjeta');
            $table->date('mes_vencimiento');
            $table->date('anio_vencimiento');
            $table->integer('cvv');
            $table->integer('subtotal');
            $table->integer('iva');
            $table->integer('total');
            $table->integer('status');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_cliente')->references('id')->on('usuarios');
            $table->foreign('id_banco')->references('id')->on('bancos');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
}
