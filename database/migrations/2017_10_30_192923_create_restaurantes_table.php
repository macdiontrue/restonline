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
            $table->increments('id_restaurante');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_horario')->unsigned();
            $table->integer('id_cozinha')->unsigned();
            $table->integer('id_distrito')->unsigned();
            $table->string('nome');
            $table->string('logotipo');
            $table->string('telefone');
            $table->string('endereco');
            $table->boolean('estado');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
            $table->foreign('id_horario')->references('id_horario')->on('horarios')->onDelete('cascade');
             $table->foreign('id_cozinha')->references('id_cozinha')->on('cozinhas')->onDelete('cascade');
              $table->foreign('id_distrito')->references('id_distrito')->on('distritos')->onDelete('cascade');
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
        Schema::dropIfExists('restaurantes');
    }
}
