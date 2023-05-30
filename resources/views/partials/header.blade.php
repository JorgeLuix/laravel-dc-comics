

<header>
    <div class="container d-flex align-items-center justify-content-between">
        <div class="p-3">
                <img src="{{ Vite::asset('resources/images/dc-logo.png') }} " alt="">
        </div>

        <div class="d-flex">
            <ul class=" d-flex">
                @foreach (config('headerItems.headerLinks') as $item)
                    <li class="nav-item px-3 list-unstyled">
                        <a href="#"> {{ $item }} </a>
                    </li>

                    @endforeach

            </ul>
        </div>
        {{-- <div>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div> --}}
    </div>
</header>
