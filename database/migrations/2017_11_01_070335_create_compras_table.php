<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('compra_id');
            $table->integer('produto_id')->unsigned();
            $table->integer('pedido_id')->unsigned();
            $table->integer('qtd');
            $table->double('preco');
            $table->timestamps();
            $table->foreign('produto_id')->references('produto_id')->on('produtos')->onDelete('cascade');
            $table->foreign('pedido_id')->references('pedido_id')->on('pedidos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
