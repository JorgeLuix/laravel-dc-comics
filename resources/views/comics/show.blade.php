@extends('layouts.app')

<title>Details</title>

@section('content')
    <div class="container">
        <div class="card w-50">
            <img src="{{ $comic->thumb }}" class="card-img w-100" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
                <p><strong>Price:</strong> {{ $comic->price }}</p>
                <p><strong>Series:</strong> {{ $comic->series }}</p>
                <p><strong>Sale Date:</strong> {{ $comic->sale_date }}</p>
                <p><strong>Type:</strong> {{ $comic->type }}</p>
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
