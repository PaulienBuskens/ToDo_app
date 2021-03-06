<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Archief;
use Carbon\Carbon;

class CreatesController extends Controller
{

    public function home(){
        $items = Item::all();
        $date = Carbon::today()->format('d-m-Y');
        return view('home',['items'=>$items], ['date'=>$date]);
    }

    public function add(Request $request){
        $this->validate($request, [
            'title' => 'required|unique:items|max:100',
            'description' => 'required',
            'dueDate'=>'required|date'
        ]);

        $items = new Item;
        $items->title = $request->input('title');
        $items->description = $request->input('description');
        $items->dueDate = $request->input('dueDate');
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
            'description' => 'required',
            'dueDate' => 'required'
        ]);
        $data = array(
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            'dueDate'=> $request->input('dueDate'),
            
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

    public function done(Request $request,$id){
        $items = Item::find($id);
        return view('done',['items'=>$items]);
    }

    public function finished(Request $request, $id){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'dueDate'=>'required'
        ]);

        $items = new Archief;
        $items->title = $request->input('title');
        $items->description = $request->input('description');
        $items->dueDate = $request->input('dueDate');
        $items->save();
        
        Item::where('id',$id)->delete();

        return redirect('/')->with('info','Item archieved Successfully!');
   
    }

    public function archief(){
        $archiefs = Archief::all();
        return view('archief',['archiefs'=>$archiefs]);
    }

    public function deleteDone($id){
        Archief::where('id', $id)->delete();
        return redirect('/archief')->with('info','Archieved Item Deleted Successfully!');
    }

    public function pagenotfound(){
        return view('error.404error');
    }
}
