<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cartoes extends Model
{
    //

    protected $fillable = [
        'num_cartao' ,
        'val_cartao' ,
        'codigo_seg' ,
        'usuario_id'
    ];
}
