<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tag'
    ];
    public function post2s(){
        return $this->belongsToMany('App\Post2');
    }
    public function posts(){
        return $this->belongsToMany('App\Post');
    }
}
