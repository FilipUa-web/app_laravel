<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['name','email','post_id','approved','comment','user_id'];
    
    public function post(){

        return $this->belongsTo('App\Post');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }
}
