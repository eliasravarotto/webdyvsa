<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('slug');
            $table->string('img_logo')->nullable();
            $table->string('img_modelo')->nullable();
            $table->string('slogan')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('link_ficha_tecnica')->nullable();
            $table->string('link_catalogo')->nullable();
            $table->boolean('activo')->default(1);
            $table->boolean('destacado')->default(0);
            $table->integer('orden')->default(1);
            $table->boolean('publicar_servicio')->default(1);
            $table->integer('marca_id')->unsigned()->default(1);
            $table->integer('tipo_vehiculo_id')->nullable()->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modelos');
    }
}
