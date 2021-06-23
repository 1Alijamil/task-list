@extends('layout')
@section('content')

@foreach ($tasks as $task )
<h1><a href="show/{{$task->id}}">  {{$task->title}}</a>

  </h1>
@endforeach

@endsection
