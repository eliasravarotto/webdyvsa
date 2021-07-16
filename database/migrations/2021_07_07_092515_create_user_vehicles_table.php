<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marca');
            $table->string('modelo');
            $table->string('version');
            $table->string('dominio');
            $table->string('color');
            $table->string('anio');
            $table->string('km');
            $table->string('photo');
            $table->integer('unidad_external_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('user_vehicles');
    }
}
