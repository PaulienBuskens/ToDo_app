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

    public function add(REquest $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $items = new Item;
        $items->title = $request->input('title');
        $items->description = $request->input('description');
        $items->save();
        return redirect('/')->with('info','Item Saved Successfully!');
        
    }
}
