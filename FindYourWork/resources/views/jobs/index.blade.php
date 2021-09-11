@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-bold text-center text-green-700 my-5">Nos missions</h2>
    @foreach($jobs as $job)
    <livewire:job :job="$job" />
    @endforeach
@endsection