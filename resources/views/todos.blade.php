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

                  @if(!$todo2->completed)
                  
                   <a href="{{route('completed',['id'=>$todo2->id])}}" class="btn btn-info">
                    mark as completed
                  </a>
                
                
                @else($todo2->completed)
                     <div class="alert alert-info" role="alert">
                     completed
                     </div>
                @endif
                  

                 <hr>
                 @endforeach

@stop