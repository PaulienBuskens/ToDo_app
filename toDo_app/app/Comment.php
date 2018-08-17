<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body', 'item_id'];

    public function item(){
        return $this->belongsTo(Item::class);
    }
}
