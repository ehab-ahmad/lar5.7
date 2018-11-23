<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Session;

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
Session::flash('sessionkey','data added');
     	return redirect()->back();
     }

public function deleter ($id)
{
    # code...
    $td= Todo::find($id);
    $td->delete();
    Session::flash('sessionkey','data deleted');
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
        Session::flash('sessionkey','data updated');
        //redirect to a specific route
    return redirect()->route('homepagee');

}
public function completer($id)
{
    # code...
    $td=Todo::find($id);
    $td->completed=1;
    $td->save();
    Session::flash('sessionkey','data marked as complete');
    return redirect()->back();
}

}
