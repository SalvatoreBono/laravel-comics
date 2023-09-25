@php
    $homeThumbs = [
        [
            'thumb' => 'https://www.coverbrowser.com/image/action-comics/1-1.jpg',
            'price' => "$19.99",
            'series' => 'Action Comics',
            'type' => 'comic book',
        ],
        [
            'thumb' => 'https://www.panini.it/media/catalog/product/cache/a5b5dd3adfe0d321084804c738f29601/M/1/M1BLLA015ISBN_0.jpg',
            'price' => "$3.99",
            'series' => 'American Vampire 1976',
            'type' => 'comic book',
        ],
        [
            'thumb' => 'https://media.wired.com/photos/593384dad80dd005b42b2817/master/w_2560%2Cc_limit/Aquaman-16.jpg',
            'price' => "$16.99",
            'series' => 'Aquaman',
            'type' => 'graphic novel',
        ],
        [
            'thumb' => 'https://d29xot63vimef3.cloudfront.net/image/batgirl/1-1.jpg',
            'price' => "$2.99",
            'series' => 'Batgirl',
            'type' => 'comic book',
        ],
        [
            'thumb' => 'https://static.posters.cz/image/750/locandine-film-in-plexiglass-batman-prowl-comic-cover-i69653.jpg',
            'price' => "$3.99",
            'series' => 'Batman',
            'type' => 'comic book',
        ],
        [
            'thumb' => 'https://static.wikia.nocookie.net/marvel_dc/images/5/50/Batman_Beyond_v.1_1.jpg',
            'price' => "$2.99",
            'series' => 'Batman Beyond',
            'type' => 'comic book',
        ],
        [
            'thumb' => 'https://static.wikia.nocookie.net/marvel_dc/images/0/0d/Batman_Superman_Vol_1_1.jpg',
            'price' => "$3.99",
            'series' => 'Batman/Superman',
            'type' => 'comic book',
        ],
        [
            'thumb' => 'https://static.wikia.nocookie.net/marvel_dc/images/c/cf/Batman_Superman_Annual_Vol_2_1.jpg',
            'price' => "$4.99",
            'series' => 'Batman/Superman Annual',
            'type' => 'comic book',
        ],
        [
            'thumb' => 'https://static.wikia.nocookie.net/marvel_dc/images/5/54/Batman_The_Joker_War_Zone_Vol_1_1.jpg',
            'price' => "$5.99",
            'series' => 'Batman: The Joker War Zone',
            'type' => 'comic book',
        ],
        [
            'thumb' => 'https://static.wikia.nocookie.net/marvel_dc/images/6/64/Batman_Three_Jokers_Collected.jpg',
            'price' => "$6.99",
            'series' => 'Batman: Three Jokers',
            'type' => 'comic book',
        ],
        [
            'thumb' => 'https://static.wikia.nocookie.net/marvel_dc/images/f/f8/Batman_White_Knight_Presents_Harley_Quinn_Vol_1_1.jpg',
            'price' => "$4.99",
            'series' => 'Batman: White Knight Presents: Harley Quinn',
            'type' => 'comic book',
        ],
        [
            'thumb' => 'https://static.wikia.nocookie.net/marvel_dc/images/c/c8/Catwoman_Vol_2_1.jpg',
            'price' => "$16.99",
            'series' => 'Catwoman',
            'type' => 'graphic novel',
        ],
    ];
    
    $bottomImgs = [
        [
            'title' => 'digital comics',
            'img' => '/img/buy-comics-digital-comics.png',
        ],
        [
            'title' => 'dc merchandise',
            'img' => '/img/buy-comics-merchandise.png',
        ],
        [
            'title' => 'subscription',
            'img' => '/img/buy-comics-subscriptions.png',
        ],
        [
            'title' => 'comic shop locator',
            'img' => '/img/buy-comics-shop-locator.png',
        ],
        [
            'title' => 'dc power visa',
            'img' => '/img/buy-comics-subscriptions.png',
        ],
    ];
    
@endphp
@extends('layouts.public')
@section('content')
    <div class="bg-dark">
        <div class="container position-relative">
            <div class="container-series text-white bg-primary p-2">
                <h3 class="title-series">CURRENT SERIES</h3>
            </div>
            <div class="pt-5 text-white pb-3">
                <div class="row row-cols-6 gy-5 action-comics-imgs">
                    @foreach ($homeThumbs as $singleThumbs)
                        <div class="col pb-5">
                            <a href="Action Comics">
                                <img src="{{ $singleThumbs['thumb'] }}" alt="">
                            </a>
                            <div class="pt-3 text-uppercase">{{ $singleThumbs['series'] }}</div>
                        </div>
                    @endforeach
                    <button type="button" class="btn btn-primary m-auto mt-5 rounded-0 fw-bold">
                        LOAD MORE
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-main-bottom">
        <div class="container text-white pt-5 pb-5">
            <div class="main-bottom">
                <div class="d-flex align-items-center gap-3">
                    @foreach ($bottomImgs as $singleBottomImg)
                        <img style="width: 60px;" src="{{ $singleBottomImg['img'] }}" alt="" />
                        <div class="text-uppercase ps-2 pe-3">{{ $singleBottomImg['title'] }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
