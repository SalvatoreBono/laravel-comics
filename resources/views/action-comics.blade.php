@extends('layouts.public')
@section('content')
    <div style="height: 80px" class="bg-primary ">
        <div class="container position-relative">
            <img class="custom-comics" src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="">
        </div>
    </div>
    <div class="container pt-5 pb-5">
        <div class="d-flex">
            <div class="pe-5">

                <h4 class="text-uppercase fw-bold h-action-comics">
                    {{ $singleComic['title'] }}</h4>
                <div class="d-flex bg-action-comics bg-action-comics">
                    <div class=" text-white fw-bold me-auto"><span class="text-action-comics">U.S. Price:
                        </span>$19.99</div>
                    <div class="fw-bold text-action-comics">AVAILABLE</div>

                    <div class="fw-bold text-white ps-5 ">Check Availability</div>
                </div>

                <p>{{ $singleComic['description'] }}</p>
            </div>
            <img style="width: 250px" src="/img/adv.jpg" alt="">

        </div>
    </div>
    <div style="background-color: rgb(246, 246, 246)">

        <div class="pt-5 pb-5 container">
            <div class="row g-5">
                <div class="col-6 ">

                    <h4 class="p-3 border-bottom h-action-comics pb-5">Talent</h4>
                    <div class="d-flex border-bottom">
                        <div class="fw-bold h-action-comics">Art by:</div>
                        <p style="width: 400px; color: rgb(96, 177, 225)" class="ms-auto fw-bold">
                            @foreach ($singleComic['artists'] as $item)
                                {{ $item }},
                            @endforeach
                        </p>
                    </div>
                    <div class="d-flex border-bottom">
                        <div class="fw-bold h-action-comics">Written by:</div>
                        <p style="width: 400px; color: rgb(96, 177, 225)" class="ms-auto fw-bold">
                            @foreach ($singleComic['writers'] as $item)
                                {{ $item }},
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="col-6 ">

                    <h4 class="p-3 border-bottom h-action-comics pb-5">Specs</h4>
                    <div class="d-flex border-bottom">
                        <div class="fw-bold h-action-comics">Series:</div>
                        <p style="width: 400px; color: rgb(96, 177, 225)" class="ms-auto fw-bold text-uppercase">
                            {{ $singleComic['series'] }}
                        </p>
                    </div>
                    <div class="d-flex border-bottom">
                        <div class="fw-bold h-action-comics">U.S. Price:</div>
                        <p style="width: 400px;" class="ms-auto fw-bold">
                            {{ $singleComic['price'] }}
                        </p>
                    </div>
                    <div class="d-flex border-bottom">
                        <div class="fw-bold h-action-comics">On Sale Date</div>
                        <p style="width: 400px;" class="ms-auto fw-bold">
                            {{ $singleComic['sale_date'] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endsection