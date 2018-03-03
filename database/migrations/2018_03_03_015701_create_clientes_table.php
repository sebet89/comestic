<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('uf',2)->nullable();
            $table->string('cep',9)->nullable();
            $table->string('numero',9)->nullable();
            $table->string('complemento')->nullable();
            $table->string('telefone',14)->nullable();
            $table->string('celular',15)->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();

            $table->index('name');
        });
    }
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
