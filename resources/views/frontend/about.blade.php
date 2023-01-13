@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
    <div class="container">
        <h2 class="title-h2">About us</h2>
        <div class="mt-5">
            <img class="img-fluid" src="{{ asset('img/about_us.png') }}" alt="About Us">
            <p class="big_parag my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>

        <div class="my-6 row">
            <div class="col-md-7">
                <img src="{{ asset('img/about_2.png') }}" alt="About">
            </div>
            <div class="col-md-5">
                <p class="big_parag my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
        </div>

        <div class="my-6 row">
            <div class="col-md-5">
                <p class="big_parag my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="col-md-7">
                <img src="{{ asset('img/about_3.png') }}" alt="About">
            </div>
        </div>

    </div>

@endsection
