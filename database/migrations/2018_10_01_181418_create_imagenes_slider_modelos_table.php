<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagenesSliderModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes_slider_modelos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('modelo_id')->unsigned();
            $table->foreign('modelo_id')->references('id')->on('modelos');
            $table->string('url');
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
        Schema::dropIfExists('imagenes_slider_modelos');
    }
}
