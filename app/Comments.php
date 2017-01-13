<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['name','email','post_id','approved','comment'];
    
    public function post(){

        return $this->belongsTo('App\Post');
    }
}
