@extends('layouts.app')

<title>Homepage</title>

@section('home')
    <div class="container p-5">
        <h1 class="text-warning">Esploriamo il Mondo dei Fumetti!</h1>
        <section class="text-white py-5">
            <h6>Cosa troverai su questo sito?</h6>
            <ul>
                <li>Una vasta collezione di fumetti di diversi categorie: supereroi, fantasy, azione,avventura e molto altro.
                </li>
                <li>Ogni fumetto è curato con attenzione per garantire qualità e coinvolgimento.</li>
            </ul>
        </section>
        <a class="btn btn-danger text-warning btn-shadow" href="{{ route('comics.index') }} ">Vai ai fumetti! <i class="text-light fa-solid fa-circle-arrow-right"></i></a>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($comics as $index => $comic)
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" @if ($index === 0) class="active" @endif></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($comics as $index => $comic)
                <div class="carousel-item @if ($index === 0) active @endif">
                    <img src="{{ $comic['thumb'] }}" class="d-block w-100" alt="{{ $comic['title'] }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $comic['title'] }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

@endsection
