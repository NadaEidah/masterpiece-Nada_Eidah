<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    //
    protected $fillable = ['step'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
