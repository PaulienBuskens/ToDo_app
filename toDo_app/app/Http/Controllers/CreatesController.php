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

    public function update($id){
        $items = Item::find($id);
        return view('update',['items'=>$items]);
    }

    public function edit(Request $request, $id){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        $data = array(
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            
        );

        Item::where('id', $id)->update($data);
        return redirect('/')->with('info','Item Updated Successfully!');
    }

    public function read($id){
        $items = Item::find($id);
        return view('read',['items'=>$items]);
    }

    public function delete($id){
        Item::where('id', $id)->delete();
        return redirect('/')->with('info','Item Deleted Successfully!');
    }
}
