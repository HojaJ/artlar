@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

    <div class="container">
        <h2 class="title-h2 mb-5">New Arrivals</h2>
            <div class="row">
                @for($i = 0; $i < 12; $i++)
                    <div class="col-lg-4 col-md-6 col-sm-6">
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
            @include('frontend.includes.pagination')
    </div>
@endsection

