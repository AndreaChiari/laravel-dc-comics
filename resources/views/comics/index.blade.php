@extends('home')

@section('content')

    <div class="jumbotron">
        <button class="jumbo-button"> CURRENT SERIES</button>
    </div>
    <div class="card-container">
        <section class="content">
          @foreach($comics as $comic)
            <div class="card">
                <a href="{{route('comics.show',$comic->id)}}">
                    <img src="{{$comic['thumb']}}" alt="card.type">
                </a>
                <h3>{{ $comic['title']}}</h3>
            </div>
          @endforeach
            <a class="button-cards"> LOAD MORE </a>
           <a class="button-create" href="{{route('comics.create')}}">CREATE YOUR COMIC!</a>
      </section>
  </div>
@endsection
                