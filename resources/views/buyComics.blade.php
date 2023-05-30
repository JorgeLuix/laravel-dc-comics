{{-- @extends('layout.app')

@section('content') --}}
<div class="">
    <div class="container d-flex p-3 justify-content-around align-items-center">
        <span><a href="#"><img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}"> digital comics</a></span>
        <span><a href="#"><img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt=""> dc merchandise</a></span>
        <span><a href="#"> <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt=""> subscription</a></span>
        <span><a href="#"><img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt=""> comic shop locator</a></span>
        <span><a href="#">
            <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt=""> dc power visa
            </a></span>
   </div>
 </div>
{{-- @endsection --}}
<style lang="scss">

    span a{
        padding-right: 10px;
        color:white;
        font-size: 1rem;
    }
    span a img {
        width: 30%;
    }

</style>
