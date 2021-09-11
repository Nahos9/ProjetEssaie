@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-bold text-start text-green-700 my-5">{{$id->title}}</h2>
    <div class="py-5 px-3 shadow-sm hover:shadow-md rounded border border-gray-200 my-3">
        <h2 class="text-xl font-bold text-green-700">{{ $id->user()}}</h2>
        <p class="text-md text-gray-800 py-4">{{$id->description}}</p>
        <p class="text-gray-300 mb-4">Prix : {{number_format($id->price,2,',',' ').'£'}}</p>
    </div>
@endsection