<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo_usuario');
            $table->string('nombre',80);
            $table->string('apellido_paterno',80);
            $table->string('apellido_materno',80);
            $table->integer('telefono');
            $table->string('correo',80);
            $table->string('password',80);
             $table->integer('status');
            $table->foreign('id_tipo_usuario')->references('id')->on('tipo_usuarios');
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
        Schema::dropIfExists('usuarios');
    }
}
