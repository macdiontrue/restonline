<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    protected $primarykey='restaurante_id';

     protected $fillable = [
        'nome','logotipo','telefone','status','endereco'
    ];

    //Funcao que retorna contas do restaurante
    public function contas_do_restaurante(){
    	return $this->hasMany('app\ContaRestaurante');
    }

    //Funcao que retorna produtos do restaurante
    public function produtos_do_restaurante(){
    	return $this->hasMany('app\Produto');
    }
}
