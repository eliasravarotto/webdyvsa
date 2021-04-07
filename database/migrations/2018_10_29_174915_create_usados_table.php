<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('interno')->nullable();
            $table->string('dominio')->nullable();
            $table->string('marca');
            $table->string('modelo');
            $table->string('anio');
            $table->string('km')->nullable();
            $table->string('combustible')->nullable();
            $table->string('transmision')->nullable();
            $table->string('color');
            $table->integer('precio')->nullable();
            $table->boolean('uct')->default(0);
            $table->integer('orden')->nullable();
            $table->string('estado')->nullable();
            $table->string('foto')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('slug')->unique();
            $table->boolean('visible')->nullable();
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
        Schema::dropIfExists('usados');
    }
}
