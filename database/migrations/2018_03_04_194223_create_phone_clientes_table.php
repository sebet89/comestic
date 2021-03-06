<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhoneClientesTable extends Migration
{
    public function up()
    {
        Schema::create('phone_clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id')->unsigned();
            $table->string('tipo');
            $table->string('numero',15);
            $table->integer('operadora')->nullable()->unsigned();
            $table->text('obs')->nullable();
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('phone_clientes');
    }
}
