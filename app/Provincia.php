<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
     protected primarykey='provincia_id';

     protected $fillable = [
        'nome'
    ];

    //Funcao que retorna restaurantes dum distrito
    public function restaurantes(){
    	return $this->hasMany('app\Restaurante');
    }
}
