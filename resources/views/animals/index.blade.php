@extends('layouts.myapp')
@section('title', 'Animals')
@section('content')
    <p>Animals at Swansea Zoo</p>
    <ul>
        @foreach($animals as $animal)
        <li><a href="{{route('animals.show', ['id'=>$animal->id])}}">{{$animal->name}}</a></li>
        @endforeach
    </ul>
@endsection