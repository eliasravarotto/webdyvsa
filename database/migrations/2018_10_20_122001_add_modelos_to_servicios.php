<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModelosToServicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tipo_servicios', function (Blueprint $table) {
            $table->string('yaris')->default(0);
            $table->string('innova')->default(0);
            $table->string('prius')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tipo_servicios', function (Blueprint $table) {
            $table->dropColumn('yaris');
            $table->dropColumn('innova');
            $table->dropColumn('prius');
        });
    }
}
