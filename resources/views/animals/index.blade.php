@extends('layouts.myapp')
@section('title', 'Animals')
@section('content')
    <p>Animals at Swansea Zoo</p>
    <a href="{{route('animals.create')}}">Create Animal</a>
    <ul>
        @foreach($animals as $animal)
        <li><a href="{{route('animals.show', ['animal'=>$animal])}}">{{$animal->name}}</a></li>
        @endforeach
    </ul>
@endsection
