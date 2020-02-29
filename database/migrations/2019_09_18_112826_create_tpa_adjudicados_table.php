<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTpaAdjudicadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tpa_adjudicados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grupo');
            $table->string('orden');
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
        Schema::dropIfExists('tpa_adjudicados');
    }
}
