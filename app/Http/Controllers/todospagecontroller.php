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
}
