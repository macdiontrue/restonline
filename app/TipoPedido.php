<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPedido extends Model
{
    protected primarykey='tpedido_id';

     protected $fillable = [
        'nome'
    ];

    //Funcao que retorna restaurante de uma determinada cozinha
    public function pedidos(){
    	return $this->hasMany('app\Pedido');
    }
}
