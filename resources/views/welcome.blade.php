@extends('layout', ['title'=> 'Home'])
@section('content')
    <h1>My {{$foo}} Website!!</h1>
    @foreach($tasks as $task)
        <li>{{$task}}</li>
    @endforeach
@endsection
