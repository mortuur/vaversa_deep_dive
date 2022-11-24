@extends('layouts.app')

@section('content')
    @foreach($plants as $plant)
        <div class=" transform transition duration-500 hover:scale-105 p-4 bg-white  rounded-lg w-80 shadow-md">
            <p class="font-bold">{{$plant->name}}</p>
            <p>{{$plant->added_date}}</p>
            <img src="{{$plant->image_url}}" alt="">
        </div>
    @endforeach
@endsection
