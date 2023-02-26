@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
    <div class="container contact-page">
        <h2 class="title-h2">Contact us</h2>

        <div class="row flex-column-reverse flex-md-row">
            <div class="col-md-6">
                <div class="contact__info d-flex flex-column justify-content-between h-100">
                    <p>{{ setting('address') }}</p>
                    <p>{{ setting('phone') }}</p>
                    <p>{{ setting('email') }}</p>
                </div>
            </div>
            <div class="col-md-6 mb-5 mb-md-0">
                <img src="{{ asset('img/contact.jpg') }}" alt="Contact Us">
            </div>
        </div>

    </div>

@endsection
