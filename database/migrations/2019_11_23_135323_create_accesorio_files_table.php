<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesorioFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesorio_files', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('accesorio_id')->unsigned();
            $table->foreign('accesorio_id')->references('id')->on('accesorios');

            $table->integer('file_id')->unsigned();
            $table->foreign('file_id')->references('id')->on('files');

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
        Schema::dropIfExists('accesorio_files');
    }
}
