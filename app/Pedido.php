<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
     protected primarykey='pedido_id';

     protected $fillable = [
        'numero','total'
    ];
}
