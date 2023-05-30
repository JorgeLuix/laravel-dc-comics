<header>
    <div class="container d-flex align-items-center justify-content-between">
        <div class="p-3">
            <img src="{{ Vite::asset('resources/images/dc-logo.png') }} " alt="">
        </div>

        <div class="d-flex justify-content-between">
            <ul class="nav d-flex">
                @foreach (config('headerItems.headerLinks') as $item)
                    <li class="nav-item px-2 list-unstyled">
                        <a class="nav-link" href="#"> {{ $item }} </a>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</header>
