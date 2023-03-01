@extends('home')

@section('content')

<div class="index-container">
    <h1>{{$comic->title}}</h1>
    <h2>{{$comic->price}}</h2>
</div>

@endsection