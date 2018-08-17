<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Item $items){
        Comment::create([
            'body'=> request('body'),
            'item_id'=> $items->id
        ]);
        return back();
    }
}
