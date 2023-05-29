@extends('layout.app')


@section('content')
    <div class="wrapper ">
        <div class="hero position-relative">
            <img src="/images/jumbotron.jpg" alt="hero">
            <button class="text-uppercase fw-bold fs-5 btn btn-primary rounded-0">Current Series</button>
        </div>
        <div class="bg-black">
            <div class="container  h-100 text-white">
                <div class="row mx-auto">
                    @foreach ($comics as $comic)
                    <div class="col-12 col-md-4 col-lg-2 text-center">
                        <img class="my-card-img" src="{{ $comic['thumb']}}" alt="{{ $comic['title']}}">
                        <a href="{{ route('main.show', ['index' => $loop ->index]) }}" class="text-white text-decoration-none">
                            <div class="text-uppercase small py-2">
                                {{ $comic['title']}}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
                <button class="text-uppercase mx-auto d-block btn btn-primary rounded-0">Load More</button>
            </div>
        </div>
    </div>
    <div class="bg-primary">
        <div class="container">
            <div class="row">
                @foreach (config('partials.mainLinks') as $link)
                    <div class="col py-md-3 py-0 pe-3 d-flex align-items-center">
                        <div class="rem-3 pe-2"><img class="img-fluid" src={{ $link['image'] }} alt="digital"></div>
                        <div>
                            <a href="#">
                                <h6 class="text-uppercase text-white">{{ $link['text'] }}</h6>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
