<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['name','email','post_id','approved','comment','photo_id'];
    
    public function post(){

        return $this->belongsTo('App\Post');
    }

    public function photo(){

        return $this->belongsTo('App\Photo');
    }
}
