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
              <form action="{{route('comics.destroy' , $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger ms-5">&#128465; Delete</button>
              </form>
              <h3>{{ $comic['title']}}</h3>
              <a href="{{route('comics.edit',$comic->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
          </div>
          @endforeach
           <a class="button-cards"> LOAD MORE </a>
           <a class="button-create" href="{{route('comics.create')}}">CREATE YOUR COMIC!</a>
      </section>
  </div>
@endsection
                