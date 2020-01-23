<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Work extends Model
{
    //
   

  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'body'];
   
    /**
     * The has Many Relationship
     *
     * @var array
     */
    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
