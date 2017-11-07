<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected primarykey='produto_id';

     protected $fillable = [
        'nome','preco','imagem'
    ];
}
