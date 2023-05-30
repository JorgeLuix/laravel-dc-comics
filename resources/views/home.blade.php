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
        <a href="{{ route('comics.index') }} ">Vai ai fumetti! <i class="fa-solid fa-circle-arrow-right"></i></a>
    </div>

@endsection
