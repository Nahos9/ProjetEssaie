@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-bold text-start text-green-700 my-5">{{$id->title}}</h2>
    <div class="py-5 px-3 shadow-sm hover:shadow-md rounded border border-gray-200 my-3">
        <h2 class="text-xl font-bold text-green-700">{{ $id->user()}}</h2>
        <p class="text-md text-gray-800 py-4">{{$id->description}}</p>
        <p class="text-gray-300 mb-4">Prix : {{number_format($id->price,2,',',' ').'£'}}</p>
    </div>
    <section x-data="{open: false}">
        <a href="#  " class="text-green-500" @click="open = !open">Soumettre votre candidature ici</a>
        <form x-show="open" x-cloak class="w-full max-w-md" method="POST" action="{{ route('proposals.store',$id)}}">
            @csrf
                <textarea name="content" id="" class="p-3 font-thin"></textarea>
                <button type="submit" class="bg-green-500 px-3 py-2 block mt-2 rounded-full text-white">Soumettre</button>
        </form>
    </section>
@endsection