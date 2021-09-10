@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-bold text-center text-green-700 my-5">Nos missions</h2>
    @foreach($jobs as $job)
    <div class="py-5 px-3 shadow-sm hover:shadow-md rounded border border-gray-200 my-3">
        <h2 class="text-xl font-bold text-green-700">{{ $job->title}}</h2>
        <p class="text-md text-gray-800 py-4">{{$job->description}}</p>
        <p class="text-gray-300 mb-4">Prix : {{number_format($job->price,2,',',' ').'£'}}</p>
        <div class="flex ">
            <span class="h-2 w-2 bg-green-300 rounded-full mr-1 mt-8"></span>
            <a class="h-1/2 w-75 py-2 px-3 rounded border rounded-full mt-4 bg-blue-400 text-gray-300 hover:bg-blue-600" href="">Voir la mission</a>
        </div>
    </div>
    @endforeach
@endsection