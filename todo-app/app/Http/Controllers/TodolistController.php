<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function index()
    {
        $todolists=Todolist::all();
        return view('home',compact('todolists'));
    }

  
    public function store(Request $request)
    {
        $data=$request->validate([
            'content'=>'required'
        ]);

        Todolist::create($data);
        return back();
    }

 
    public function edit($id){
        $list=Todolist::all()->where('id',$id);
        return view('edit')->with('rlist',$list);
                                  
    }

    public function update(){
        $r=request(); 
        $updatelist=Todolist::find($r->id);

        $updatelist->content=$r->contentDetail;
        $updatelist->save();
        
        return redirect()->route('index');
    }
    
    public function delete($id){
        $deletePost=Todolist::find($id);
        $deletePost->delete();
        
        return back();
    }
}
