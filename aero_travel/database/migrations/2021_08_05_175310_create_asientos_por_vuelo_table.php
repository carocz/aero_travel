<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsientosPorVueloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asientos_por_vuelo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_vuelo');
            $table->string('detalle');
            $table->integer('status');
            $table->foreign('id_vuelo')->references('id')->on('vuelos');
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
        Schema::dropIfExists('asientos_por_vuelo');
    }
}
