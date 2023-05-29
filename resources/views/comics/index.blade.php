@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-12 col-md-6 col-lg-2 mb-4">
                <div class="jc-card">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">

                    <div class="cards-body">
                        <h2 class="card-title">{{$comic->title}}</h2>
                        <p class="card-description">{{$comic->description}}</p>
                        <div class="price-play">
                        <p class="card-text">{{$comic->price}}</p>
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
        <button class="text-uppercase btn btn-primary">load more</button>
    </div>
@endsection
