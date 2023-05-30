<div class="bg-foot text-white d-flex justify-content-between">
    <div class="container d-flex pt-5">
        <ul>
            <h4 class="text-uppercase">dc comics</h4>
            @foreach (config('customs.listDcComics') as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>

        <ul>
            <h4 class="text-uppercase">dc</h4>
            @foreach (config('customs.listDc') as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>

        <ul>
            <h4 class="text-uppercase">sites</h4>
            @foreach (config('customs.sitesList') as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
    <div class="container">
        <img src="{{ Vite::asset('/resources/images/dc-logo-bg.png')}} " alt="">
    </div>
</div>
<div class="bg-footer p-3">
    <div class=" container d-flex justify-content-between align-items-center">
     <button type="button"
         class="btn btn-outline text-white text-uppercase rounded-0 border border-3 border-primary">
         sign-up now!
     </button>


     <ul class="d-flex align-items-center gap-3">
         <li><a class="text-primary" href="">follows us</a></li>
         <li><a href=""><img src="{{ Vite::asset('resources/images/footer-facebook.png') }}"></a></li>
         <li><a href=""><img src="{{ Vite::asset('resources/images/footer-periscope.png') }}"></a></li>
         <li><a href=""><img src="{{ Vite::asset('resources/images/footer-pinterest.png') }}"></a></li>
         <li><a href=""><img src="{{ Vite::asset('resources/images/footer-twitter.png') }}"></a></li>
         <li><a href=""><img src="{{ Vite::asset('resources/images/footer-youtube.png') }}"></a></li>
     </ul>
 </div>
  </div>
