@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
    <div class="container">
        <div>
            @include('frontend.includes.slider.showcase')
        </div>
        <div class="slideсard">

            @include('frontend.includes.slider.artist')
            <a href="javascript:void(0);" class="slideсard__title d-inline-block">
                <h2 class="title-h2">Artists</h2>
            </a>
        </div>

        <div class="slideсard">
            @include('frontend.includes.slider.work')
            <a class="slideсard__title d-inline-block" href="javascript:void(0);">
                <h2 class="title-h2">Works</h2>
            </a>
        </div>

        <div class="slideсard new_slidecard">
            <a class="slideсard__title d-inline-block" href="javascript:void(0);">
                <h2 class="title-h2">New Arrivals</h2>
            </a>
            @include('frontend.includes.slider.new')
        </div>
    </div>

    <div class="auction">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center auction__wrapper">
                <span class="before">COMING</span>
                <h2 class="title-h2">Auctions</h2>
                <span class="after">SOON</span>
            </div>

        </div>
    </div>

@endsection
