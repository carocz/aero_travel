<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVuelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_aerolinea');
            $table->unsignedBigInteger('id_ciudad_origen');
            $table->unsignedBigInteger('id_ciudad_destino');
            $table->date('fecha',80);
            $table->time('hora_salida');
            $table->time('hora_llegada');
            $table->integer('precio_compra');
            $table->integer('precio_venta');
            $table->foreign('id_aerolinea')->references('id')->on('aerolineas');
            $table->foreign('id_ciudad_origen')->references('id')->on('ciudades');
            $table->foreign('id_ciudad_destino')->references('id')->on('ciudades');
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
        Schema::dropIfExists('vuelos');
    }
}
