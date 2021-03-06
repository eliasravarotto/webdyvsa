<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudTestDrivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_test_drives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cliente');
            $table->string('telefono');
            $table->string('email');
            $table->string('modelo');
            $table->date('fecha_estimada');
            $table->boolean('solicitud_atendida');
            $table->string('sucursal');
            $table->string('enviar_a');
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
        Schema::dropIfExists('solicitud_test_drives');
    }
}
