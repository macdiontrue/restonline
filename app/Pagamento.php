<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
     protected primarykey='pagamento_id';

     protected $fillable = [
        'nome'
    ];

    
}
