@extends('layouts.app')

@section('content')
<h1 >Bienvenu {{ auth()->user()->name}}</h1>
@endsection