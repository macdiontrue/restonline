<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnderecoCliente extends Model
{
    protected primarykey='ecliente_id';

     protected $fillable = [
        'endereco'
    ];
}
