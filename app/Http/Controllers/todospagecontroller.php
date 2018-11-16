<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class todospagecontroller extends Controller
{
    public function index(){

	 $todosvar= Todo::all();

     return view('todos')->with('todosvar',$todosvar);

	/*$todoVariable=Todo::all();

     return view('todos')->with('TheDataHodler',$todoVariable);*/}

     public function store(Request $request){
     	$todostore= new Todo;
     	$todostore->todo=$request->todoform;
     	$todostore->save();

     	return redirect()->back();
     }

public function deleter ($id)
{
    # code...
    $td= Todo::find($id);
    $td->delete();
    return redirect()->back();

}
public function updater ($id)
{
   $td=Todo::find($id);

   return view('update')->with('td',$td);

}
public function saveupdate(Request $request ,$id)
{
    //dd($request->all());
      $td= Todo::find($id);
        $td->todo=$request->todoupdatein;
        $td->save();
        //redirect to a specific route
    return redirect()->route('homepagee');

}

}
