<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // creo collegamento con Post
    public function joinPost(){
        return $this->hasMany('App\Post');
    }
}
