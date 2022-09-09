@extends('layouts.myapp')
@section('title','Create Animal')
@section('content')
    <form method="POST" action="{{route('animals.store')}}">
        @csrf
        <p>Name: <input type="text" name="name" value="{{old('name')}}"></p>
        <p>Weight: <input type="text" name="weight" value="{{old('weight')}}"></p>
        <p>Date Of Birth: <input type="text" name="date_of_birth" value="{{old('date_of_birth')}}"></p>
        <p>Enclosure Id:
            <select name="enclosure_id">
                @foreach ($enclosures as $enclosure)
                <option value="{{$enclosure->id}}"
                        @if($enclosure->id == old('enclosure_id'))
                            selected="selected"
                        @endif
                    >
                    {{$enclosure->name}}
                </option>
                @endforeach
            </select>
        </p>
        <input type="submit" value="Submit">
        <a href="{{route('animals.index')}}">Cancel</a>
    </form>
@endsection

