<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->increments('restaurante_id');
            $table->integer('tc_id')->unsigned();
            $table->integer('provincia_id')->unsigned();
            $table->string('nome');
            $table->string('logotipo');
            $table->string('telefone');
            $table->string('email');
            $table->string('senha');
            $table->string('endereco');
            $table->float('latitude');
            $table->float('longitude');
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('tc_id')->references('tc_id')->on('tipo_cozinhas')->onDelete('cascade');
             $table->foreign('provincia_id')->references('provincia_id')->on('provincias')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurantes');
    }
}
