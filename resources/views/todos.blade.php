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
                  <a href="{{route('tododeleter',['id3'=>$todo2->id])}}" class="btn btn-danger">
                    delete
                  </a>
                   <a href="{{route('todoupdater',['id4'=>$todo2->id])}}" class="btn btn-info">
                    update
                  </a>
                  

                 <hr>
                 @endforeach

@stop