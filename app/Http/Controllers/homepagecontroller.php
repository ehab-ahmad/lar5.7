<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\homepage;
class homepagecontroller extends Controller
{
    public function homepage(){
	$hpcv= homepage::all();
	return view('homepage')->with('hpcv',$hpcv);}

	public function adding (Request $request)
	{
		$instance=new homepage();
		$instance->home=$request->hpinput;
		$instance->save();
		 return redirect()->back();
	}
	public function deleter($id){
$hpd=homepage::find($id);
$hpd->delete();
return redirect()->back();
	}

	public function update($id)
	{
		$v=homepage::find($id);
		return view('updatefortest')->with('v',$v);
		# code...
	}

	public function saveupdate(Request $request,$id)
	{
		# code...
		$vv=homepage::find($id);
		$vv->home=$request->inputupdate;
		$vv->save();
		return redirect()->route('test');

	}
}
