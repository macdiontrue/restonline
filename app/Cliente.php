<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $primarykey='cliente_id';

     protected $fillable = [
        'nome', 'apelido','telefone','email','senha'
    ];

    //Funcao que retorna enderecos do cliente
    public function enderecos(){
    	return $this->hasMany('app\EnderecoCliente');
    }
}
