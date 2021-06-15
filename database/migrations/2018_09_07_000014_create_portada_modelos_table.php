<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortadaModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos_portada', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('imagen_desktop');
            $table->string('imagen_mobile');
            $table->string('logo');
            
            $table->integer('modelo_id')->unsigned();
            
            $table->text('html')->nullable();
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
        Schema::dropIfExists('modelos_portada');
    }
}
