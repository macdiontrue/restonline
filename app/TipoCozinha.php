<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCozinha extends Model
{
    protected primarykey='tc_id';

     protected $fillable = [
        'nome'
    ];

    //Funcao que retorna restaurante de uma determinada cozinha
    public function restaurantes(){
    	return $this->hasMany('app\Restaurante');
    }
}
