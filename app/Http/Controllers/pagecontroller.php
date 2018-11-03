<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function myfunc1()
    { 
    	return view('new');
    }

}
