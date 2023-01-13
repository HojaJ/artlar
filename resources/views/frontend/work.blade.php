@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/work2.png') }}" class="img-fluid" alt="Work">
                <a href="#" class="d-block my-5 text-center view_in">View in room</a>
                <button type="button" class="button button-cv" data-bs-toggle="modal" data-bs-target="#rarityModal">
                    Rarity
                </button>
            </div>
            <div class="col-md-6 ps-md-5">
                <div class="work-info">
                    <div>
                        <h3>Pablo Picasso</h3>
                        <h4>Les Demoiselles d'Avignon, 1907</h4>
                    </div>

                    <ul>
                        <li>61 × 48 in | 154.9 × 121.9 cm</li>
                        <li>Oil canvas</li>
                        <li>Cubism</li>
                        <li class="text-decoration-underline">Unique work</li>
                    </ul>
                    <div class="work-info__price">
                        <span>US$5,500</span>
                        <button class="button">Add to Bag</button>
                        <button class="button button-reverse">Add to Wishlist</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container work-accordion">
        <div class="row">
            <div class="col-md-6 ps-md-5 offset-6">
                <div id="accordion" class="accordion">
                    <h3>DESCRIPTION</h3>
                    <div>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut </p>
                    </div>
                    <h3>ABOUT THE ARTIST </h3>
                    <div>
                        <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna. </p>
                    </div>
                    <h3>SHIPPING AND RETURNS</h3>
                    <div>
                        <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna. </p>
                    </div>

                </div>
            </div>
        </div>
        @include('frontend.includes.slider.work')
    </div>



    <div class="modal fade rarityModal" id="rarityModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content ">
                <div class="p-5">
                    <button type="button" class="btn-close d-block ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h5>Rarity classifications</h5>
                    <ul class="mt-5">
                        <li>
                            <h6>Unique</h6>
                            <p>One-of-a-kind piece.</p>
                        </li>
                        <li>
                            <h6>Limited edition</h6>
                            <p>The edition run is has ended; the number of works produced is known and included in the listing.</p>
                        </li>
                        <li>
                            <h6>Open edition</h6>
                            <p>The edition run is ongoing. New works are still being produced, which may be numbered. This includes made-to-order works.</p>
                        </li>
                        <li>
                            <h6>Unknown edition</h6>
                            <p>The edition run has ended; it is under how many works were produced.</p>
                        </li>
                    </ul>
                    <span>Our partners are responsible for providing accurate classification information for all works.</span>
                    <button type="button" class="button d-block mx-auto" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>


@endsection
