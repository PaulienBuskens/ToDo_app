<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class CreatesController extends Controller
{
    public function home(){
        $items = Item::all();
        return view('home',['items'=>$items]);
    }
}
