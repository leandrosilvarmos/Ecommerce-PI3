<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendas extends Model
{
    //

    protected $fillable = [
            'id' ,
            'status' ,
            'cartao_id'

    ];
}
