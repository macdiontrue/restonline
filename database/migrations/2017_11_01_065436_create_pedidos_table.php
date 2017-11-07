<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('pedido_id');
            $table->integer('tpedido_id')->unsigned();
            $table->integer('ecliente_id')->unsigned();
            $table->integer('restaurante_id')->unsigned();
            $table->string('numero');
            $table->string('total');
            $table->timestamps();
            $table->foreign('restaurante_id')->references('restaurante_id')->on('restaurantes')->onDelete('cascade');
            $table->foreign('ecliente_id')->references('ecliente_id')->on('endereco_clientes')->onDelete('cascade');
            $table->foreign('tpedido_id')->references('tpedido_id')->on('tipo_pedidos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
