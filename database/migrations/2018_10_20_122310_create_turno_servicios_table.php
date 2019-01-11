<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurnoServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turno_servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cliente');
            $table->string('telefono');
            $table->string('email')->nullable();
            $table->date('fecha');
            $table->string('modelo');
            $table->string('dominio');
            $table->string('comentario')->nullable();
            $table->string('enviar_a');

            $table->integer('sucursal_id')->unsigned();
            $table->foreign('sucursal_id')->references('id')->on('sucursales');

            $table->integer('servicio_id')->unsigned();
            $table->foreign('servicio_id')->references('id')->on('tipo_servicios');
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
        Schema::dropIfExists('turno_servicios');
    }
}
