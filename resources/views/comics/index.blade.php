@extends('layouts.app')

<title>List Comics</title>

@section('home')
    <div class="jumbotron w-100">
        <img class="w-100" src="{{ Vite::asset('resources/images/jumbotron.jpg ') }} " alt="">
    </div>
    <div class="container text-center">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row py-4">
            @foreach ($comics as $comic)
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="jc-card">
                        <img src="{{ $comic->thumb }}" class="p-3" alt="{{ $comic->title }}">

                        <div class="cards-body">
                            <h2 class="card-title">{{ $comic->title }}</h2>
                            {{-- <p class="card-description">{{$comic->description}}</p> --}}
                            <div class="d-flex justify-content-around align-items-center">
                                {{-- <p class="card-text">{{$comic->price}}</p> --}}
                                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary"> Detail</a>
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modify</a>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-button btn btn-danger ms-3"
                                        data-item-title="{{ $comic->title }}">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="text-uppercase btn btn-primary">load more</a>
        <a href="{{ route('comics.create') }} " class="text-uppercase btn btn-danger">Add Comic</a>
    </div>
    @include('partials.delete');
@endsection
