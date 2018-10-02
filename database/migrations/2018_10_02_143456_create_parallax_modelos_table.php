<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParallaxModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parallax_modelos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('texto');
            $table->string('imagen');
            $table->integer('modelo_id')->unsigned();
            $table->foreign('modelo_id')->references('id')->on('modelos');
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
        Schema::dropIfExists('parallax_modelos');
    }
}
