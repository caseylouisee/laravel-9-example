@extends('layouts.myapp')
@section('title','Animal Details')
@section('content')
    <ul>
        <li>Name: {{$animal->name}}</li>
        <li>Weight: {{$animal->name}}</li>
        <li>Date of Birth: {{$animal->date_of_birth ?? 'Unknown'}}</li>
        <li>Enclosure: {{$animal->enclosure->name}}</li>
    </ul>

    <form method="POST" action="{{route('animals.destroy', ['animal'=>$animal])}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <a href="{{route('animals.index')}}">Back</a>
@endsection
