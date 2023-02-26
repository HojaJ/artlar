@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
    <div class="container">
        <div>
            @include('frontend.includes.slider.showcase')
        </div>
        <div class="slideсard">


            @include('frontend.includes.slider.artist')
            <a class="see_all_link" href="{{ route('frontend.artists') }}">See All <i class="fa-solid fa-angle-right"></i></a>
            <div class="slideсard__title">
                <h2 class="title-h2">Artists</h2>
            </div>
        </div>

        <div class="slideсard">
            @include('frontend.includes.slider.work')

            <a class="see_all_link" href="{{ route('frontend.works') }}">See All <i class="fa-solid fa-angle-right"></i></a>
            <div class="slideсard__title">
                <h2 class="title-h2">Works</h2>
            </div>
        </div>

        <div class="new_slidecard">
            <a class="slideсard__title" href="{{ route('frontend.arrivals') }}">
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
