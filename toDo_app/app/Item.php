<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function Comments(){
        return $this->hasMany(Comment::class);
    }
}
