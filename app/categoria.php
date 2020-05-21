<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\produtos;


class categoria extends Model
{
    //

    use Notifiable;


    protected $fillable = ['name'];


    public function produtos(){
        return $this->hasMany(produtos::class , 'category_id' , 'id');
    }

}


