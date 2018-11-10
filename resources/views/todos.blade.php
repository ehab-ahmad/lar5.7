@extends('layout')

@section('thecontent')

  @foreach($todosvar as $todo1)
   {{$todo1->id}}
  @endforeach

     @foreach($todosvar as $todo2)
                 {{$todo2->todo}}
                 <br>
                 <hr>
                 @endforeach

@stop