@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
    <div class="container">
        <h2 class="title-h2">Wishlist</h2>
        <div class="row mt-5">
            @for($i=0; $i<6; $i++)
            <div class="col-md-4 col-6">
                <div class="product__item">
                    <div class="product__item__pic">
                        <a href="{{ route('frontend.work') }}"><img src="{{ asset('img/work1.png') }}" alt="Work"></a>
                    </div>

                    <div class="product__item__text">
                        <h6>Frida Kahlo</h6>
                        <a href="{{ route('frontend.work') }}">Frieda and Diego Rivera</a>
                        <h5>US$15.000</h5>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>

    @include('frontend.includes.pagination')

@endsection
