@extends('layouts.app')

@section('content')
    <h1>aqui</h1>
        <a href="{{route('comics.index')}} "> index
        </a>
        <a href="{{route('comics.create')}} "> create
        </a>
        <a href="{{route('comics.show')}} "> show
        </a>
@endsection
