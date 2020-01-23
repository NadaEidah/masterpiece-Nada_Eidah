<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Post2 extends Model
{
    // use softDeletes;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'category_id','featrued','slug'
    ];

    protected $dates=['deleted_at'];


    public function getFeaturedAttribute($featrued){
        return asset($featrued);
    }

    public function category(){
        return $this->belongsTo('App\Category','user_id');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }


    public function user(){
        return $this->belongsTo('App\User');
    }
}
