<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospedajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospedajes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_hotel');
            $table->unsignedBigInteger('id_ciudad');
            $table->date('fecha_llegada');
            $table->date('fecha_salida');
            $table->integer('todo_incluido_status');
            $table->integer('precio_compra');
            $table->integer('precio_venta');
            $table->integer('capacidad');
            $table->string('descripcion');
            $table->integer('status');
            $table->foreign('id_hotel')->references('id')->on('hoteles');
            $table->foreign('id_ciudad')->references('id')->on('ciudades');
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
        Schema::dropIfExists('hospedajes');
    }
}
