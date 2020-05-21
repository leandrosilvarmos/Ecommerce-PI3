<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\categoria;

class produtos extends Model
{
    //


    protected $fillable = [
            'id' ,
            'name' ,
            'image' ,
            'description' ,
            'type' ,
            'price' ,
            'discount' ,
            'amount' ,
            'category_id'

    ];


    public function categorias(){
        return $this->belongsTo(categoria::class , 'category_id' , 'id');
    }
}
