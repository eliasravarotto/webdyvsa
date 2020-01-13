<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajeEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensaje_emails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cliente');
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('from')->nullable();
            $table->longText('mensaje');
            $table->string('enviar_a')->nullable();
            $table->string('derivar_a')->nullable();
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
        Schema::dropIfExists('mensaje_emails');
    }
}
