@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
    <div class="container">
        <div>
            @include('frontend.includes.slider.showcase')
        </div>
        <div class="slideсard">

            @include('frontend.includes.slider.artist')
            <a href="{{ route('frontend.artists') }}" class="slideсard__title d-inline-block">
                <h2 class="title-h2">All Artists</h2>
            </a>
        </div>

        <div class="slideсard">
            @include('frontend.includes.slider.work')
            <a class="slideсard__title d-inline-block" href="{{ route('frontend.works') }}">
                <h2 class="title-h2">All Works</h2>
            </a>
        </div>

        <div class="slideсard new_slidecard">
            <a class="slideсard__title d-inline-block" href="{{ route('frontend.arrivals') }}">
                <h2 class="title-h2">New Arrivals</h2>
            </a>
            @include('frontend.includes.slider.new')
        </div>
    </div>

{{--    <div class="auction">--}}
{{--        <div class="container">--}}
{{--            <div class="d-flex justify-content-between align-items-center auction__wrapper">--}}
{{--                <span class="before">COMING</span>--}}
{{--                <h2 class="title-h2">Auctions</h2>--}}
{{--                <span class="after">SOON</span>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}

    <div class="news">
        <div class="container h-100">
            <div class="swiper newsSlider h-100">
                <div class="swiper-wrapper h-100">
                    <div class="swiper-slide d-flex justify-content-center align-items-center">
                        <h3>News</h3>
                    </div>
                    <div class="swiper-slide d-flex justify-content-center align-items-center">
                        <h3>News</h3>
                    </div>
                </div>
                <div class="news__cta">
                    <a href="{{ route('frontend.news') }}">See all <i class="fa-solid fa-angle-right"></i></a>
                    <h2 class="title-h2">News</h2>
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </div>
@endsection
