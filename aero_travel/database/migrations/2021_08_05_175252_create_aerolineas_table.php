<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAerolineasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aerolineas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuarios');
            $table->string('rfc',80);
            $table->string('nombre',80);
            $table->string('razon_social',80);
            $table->unsignedBigInteger('id_ciudad');
            $table->string('direccion',80);
            $table->string('colonia',80);
            $table->string('codigo_postal',80);
            $table->string('telefono',80);
            $table->integer('status');
            $table->foreign('id_usuarios')->references('id')->on('usuarios');
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
        Schema::dropIfExists('aerolineas');
    }
}
