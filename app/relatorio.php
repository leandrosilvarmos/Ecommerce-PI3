<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class relatorio extends Model
{
    //

    protected $fillable = [
            'id' ,
            'data' ,
            'vendas_id'
    ];

}
