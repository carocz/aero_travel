<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleVentaHospedajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_venta_hospedaje', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_venta');
            $table->unsignedBigInteger('id_hospedaje');
            $table->integer('cantidad');
            $table->integer('precio_compra');
            $table->integer('precio_venta');
            $table->integer('status');
            $table->foreign('id_venta')->references('id')->on('venta');
            $table->foreign('id_hospedaje')->references('id')->on('hospedajes');
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
        Schema::dropIfExists('detalle_venta_hospedaje');
    }
}
