<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTpaAgrupadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tpa_agrupados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grupo');
            $table->integer('orden');
            $table->string('unidad');
            $table->string('modalidad');
            $table->integer('avance_cuotas');
            $table->float('precio_venta');
            $table->float('cuota_pura');   
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
        Schema::dropIfExists('tpa_agrupados');
    }
}
