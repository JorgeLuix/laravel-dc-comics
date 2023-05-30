@extends('layouts.app')

@section('content')

<header>
    @include('partials.header')
</header>
<main class="">

    <div class="container">
        @yield('content')
    </div>
    <div class="">

    </div>

</main>
<footer>
    @include('partials.footer')
</footer>

@endsection

