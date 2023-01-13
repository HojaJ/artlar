@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
    <div class="container">
        <h2 class="title-h2">In the News</h2>
        <div class="row mt-5 mb-6">
            <div class="col-md-3">
                <img src="{{ asset('img/in_the_news.png') }}" alt="In the news">
            </div>
            <div class="col-md-9">
                <div class="in_the_block">
                    <h3>TURKMENPORTAL</h3>
                    <h5>Shamyrat Muhammetgurbanov in conversation with ARTLAR’s founder Gerchek Gochmyradov</h5>
                    <p>An interview with ARTLAR founder and CEO Gerchek Gochmyradov in the lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5 mb-6">
            <div class="col-md-3">
                <img src="{{ asset('img/in_the_2.png') }}" alt="In the news">
            </div>
            <div class="col-md-9">
                <div class="in_the_block">
                    <h3>TURKMENISTAN</h3>
                    <h5>Spaniards Are Fed Up with the Yearly Invasion of Las Meninas Street Sculptures</h5>
                    <p>The yearly event is a private initiative devised by artist Antonio Azzato.</p>
                </div>
            </div>
        </div>
        @include('frontend.includes.pagination')
    </div>

@endsection
