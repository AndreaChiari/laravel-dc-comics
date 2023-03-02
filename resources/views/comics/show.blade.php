@extends('home')

@section('content')

<div class="container pt-5">
    <a href="{{route('home')}}" class="btn btn-small btn-secondary mb-3">HOME</a>
    <div class="detail-container d-flex">
        <div class="info-container">
            <h1>{{$comic->title}}</h1>
            <p>{{$comic->description}}</p>
            <h3>{{$comic->series}}</h3>
            <h5 class="mb-4">{{$comic->sale_date}}</h5>
            <div class="d-flex">
                <div class="artist-section me-4">
                    <h6>Artist:</h6>
                    <p>{{$comic->artists}}</p>
                </div>
                <div class="writer-section">
                    <h6>Writer:</h6>
                    <p>{{$comic->writers}}</p>
                </div>
            </div>
        </div>
        <div class="ms-4">
            <img class="img-fluid" src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <h5 class="pt-3">Price: {{$comic->price}}</h5>
            <p class="mx-auto">{{$comic->type}}</p>
        </div>      
    </div>
</div>

@endsection