<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_operador_turisitico');
            $table->unsignedBigInteger('id_ciudad');
            $table->integer('status');
            $table->integer('capacidad');
            $table->string('descripcion');
            $table->integer('todo_incluido_status');
            $table->integer('precio_compra');
            $table->integer('precio_venta');
            $table->foreign('id_operador_turisitico')->references('id')->on('operadores_turisticos');
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
        Schema::dropIfExists('actividades');
    }
}
