@extends('layout')

@section('thecontent')


<div class="row">
  <br>
  <br>
  <br>
<div class="col-lg-12 col-lg-offset-12">

	<form action="/create/todos" method="POST">

		@csrf

		<input type="text" name="todoform" class="form-control input-lg" placeholder="input here ">	
		
		

	</form>

</div>
</div>



  @foreach($todosvar as $todo1)
   {{$todo1->id}}
  @endforeach

     @foreach($todosvar as $todo2)
                 {{$todo2->todo}}
                 <br>
                 <hr>
                 @endforeach

@stop