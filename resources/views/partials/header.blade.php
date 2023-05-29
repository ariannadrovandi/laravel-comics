<header class="bg-white">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <img class="img-fluid" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
        </div>
        <nav>
            <ul class="d-flex flex-wrap align-items-center list-unstyled">
                @foreach (config('partials.navLinks') as $link)
                <li class="pe-4"><a href="#">{{$link}}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
