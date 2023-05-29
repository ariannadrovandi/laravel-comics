@extends('layout.app')
@section('page_title')
    {{ $comic['title'] }}
@endsection
@section('content')
    {{-- <h3>{{ $comic['title'] }}</h3> --}}
    <div class="show-comic">
        <div class="hero position-relative">
            <img class="jumbo" src="/images/jumbotron.jpg" alt="hero">
            <div class="position-thumb">
                <div class="bg-info text-white text-uppercase thumb-pill m-0">Comic Book</div>
                <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <div class="bg-info text-white text-uppercase thumb-title m-0">View Gallery</div>
            </div>
        </div>
        <div class="my-blue"></div>
        <div class="container mt-5">
            <div class="d-flex align-items-end justify-content-between pt-5">
                <div class="w-75">
                    <h3 class="text-uppercase fw-bold">{{ $comic['title'] }}</h3>
                    <div class="d-flex my-green mt-3 border-bottom border-1 border-dark text-white">
                        <div class="w-75 p-2 d-flex justify-content-between align-items-center">
                            <div>
                                <span class="opacity-50 fw-bold">U.S. Price:</span>
                                <span>{{ $comic['price'] }}</span>
                            </div>
                            <span class="opacity-50 fw-bold text-uppercase">Available</span>
                        </div>
                        <div class="w-25 p-2 border-start border-1 border-dark">
                            <span>Check Availability<i class="fa-solid ms-1 fa-angle-down"></i></span>
                        </div>
                    </div>
                    <p class="pt-3">
                        {{ $comic['description'] }}
                    </p>
                </div>
                <div class="w-20">
                    <h6 class="text-end text-uppercase">Advertisement</h6>
                    <img class="img-fluid" src="/images/adv.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="bg-light">
            <div class="container my-5">
                <div class="d-flex py-5">
                    <div class="w-50">
                        <table class="table">
                            <thead>
                                <tr class="border-bottom border-secondary">
                                    <th class="w-25 fs-3 pb-4" scope="col">Talent</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-bottom border-secondary">
                                    <th class="w-25 pb-4" scope="row">Art by:</th>
                                    <td class="text-info small">{{implode(',', $comic['artists'])}}</td>
                                </tr>
                                <tr class="border-bottom border-secondary">
                                    <th class="w-25 pb-4" scope="row">Written by:</th>
                                    <td class="text-info small">{{implode(',', $comic['writers'])}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="w-50">
                        <table class="table">
                            <thead>
                                <tr class="border-bottom border-secondary">
                                    <th class="w-25 fs-3 pb-4" scope="col">Specs</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr  class="border-bottom border-secondary">
                                    <th class="pb-4" scope="row">Series</th>
                                    <td class="text-info small">{{ $comic['series'] }}</td>
                                </tr>
                                <tr  class="border-bottom border-secondary">
                                    <th class="pb-4" scope="row">U.S.Price</th>
                                    <td class="text-info small">{{ $comic['price'] }}</td>
                                </tr>
                                <tr  class="border-bottom border-secondary">
                                    <th class="pb-4" scope="row">On Sale Date:</th>
                                    <td class="text-info small">{{ $comic['sale_date'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="border-top border-secondary">
                <div class="container">
                    <div class="row">
                        @foreach (config('partialsdb.mainLinks') as $link)
                            <div class="col py-md-3 py-0 pe-3 d-flex align-items-center justify-content-between border-end border-start border-secondary">
                                <div>
                                    <a class="text-decoration-none" href="#">
                                        <h6 class="text-uppercase text-secondary">{{ $link['text'] }}</h6>
                                    </a>
                                </div>
                                <div class="rem-3 pe-2"><img class="img-fluid inverted-img" src={{ $link['image'] }} alt="digital"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
