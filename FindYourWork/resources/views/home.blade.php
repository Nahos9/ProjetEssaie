@extends('layouts.app')

@section('content')
    @foreach(auth()->user()->likes as $like)
    <div class="flex rounded-full w-1/2 h-10 bg-gray-100 border-gray-200 my-5 shadow-sm hover:shadow-md">
        <h2>{{$like->title}}</h2>
        <p>{{$like->name}}</p>
    </div>

    @endforeach
@endsection