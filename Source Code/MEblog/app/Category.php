<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function post2(){
        return $this->hasMany('App\Post2');
    }
}
