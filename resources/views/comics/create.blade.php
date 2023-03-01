@extends('home')

@section('content')
<div class="container create-container">
    <form method="POST" action="{{route('comics.store')}}">
       @csrf
        <div class="d-flex justify-content-center">
            <div>
                <div class="row mb-4">
                    <div class="col-6">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="title" name="title" required>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="url" class="form-control" id="thumb" placeholder="thumb" name="thumb">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" placeholder="price" name="price">
                    </div>
                </div>
            </div>
            <div>
                <div class="row mb-4">
                    <div class="col-6">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" placeholder="series" name="series" required>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="text" class="form-control" id="sale_date" placeholder="sale_date" name="sale_date">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" placeholder="type" name="type">
                    </div>
                </div>
            </div>
            <div>
                <div class="row mb-4">
                    <div class="col-6">
                        <label for="artists" class="form-label">Artists</label>
                        <textarea name="artists" id="artists" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <label for="writers" class="form-label">Writers</label>
                        <textarea name="writers" id="writers" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="justify-content-center d-flex">
            <button type="submit" class="btn btn-success mb-3 me-5">Salva</button>
            <a href="{{route('home')}}" class="btn btn-small btn-secondary mb-3">HOME</a>
        </div>
    </form>
</div>

@endsection
