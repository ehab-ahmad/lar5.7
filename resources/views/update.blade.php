@extends('layout')

@section('thecontent')


<div class="col-lg-12 col-lg-offset-12">

	<form action="{{route('updatesaver',['id'=>$td->id])}}" method="POST">

		@csrf

		<input type="text" name="todoupdatein" value="{{$td->todo}}"" class="form-control input-lg" placeholder="input here ">	



		

	</form>

</div>



