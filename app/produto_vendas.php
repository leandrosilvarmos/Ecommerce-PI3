<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produto_vendas extends Model
{
    //

    protected $fillable = [
            'id' ,
            'product_id' ,
            'sales_id' ,
            'sales_total' ,
            'status' ,

    ];
}
