<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTPAPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tpa_planes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unidad');
            $table->string('modalidad');
            $table->float('precio_lista');
            $table->float('cuota_pura')->nullable();
            $table->float('integracion')->nullable();
            $table->boolean('activo')->default(1);
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
        Schema::dropIfExists('t_p_a_plans');
    }
}
