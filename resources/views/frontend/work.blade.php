@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
    <div class="container mt-md-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset($work->image_path) }}" class="img-fluid" alt="{{ $work->name }}">
                <a href="#" class="d-block my-5 text-center view_in">View in room</a>
            </div>
            <div class="col-md-6 ps-md-5">
                <div class="work-info">
                    <div>
                        <h3>{{ $work->artist->full_name }}</h3>
                        <h4>{{ $work->name }}, {{ $work->year }}</h4>
                    </div>

                    <ul>
                        <li>{{$work->size_length}} x {{$work->size_height}} cm</li>
{{--                        <li>61 × 48 in | 154.9 × 121.9 cm</li>--}}

                        <li>{{ $work->materials }}</li>
{{--                        <li>{{ $work->movements }}</li>--}}
                        <li class="text-decoration-underline">
                            <a data-bs-toggle="modal" data-bs-target="#rarityModal">
                                {{ $work->rarity->name }}
                            </a>
                        </li>
                    </ul>
                    <div class="work-info__price">
                        <span>${{ $work->price }}</span>
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
                <div class="accordion_wrapper">
                    <div class="accordion" id="accordionExample">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    DESCRIPTION
                                </button>

                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>{{ $work->description }}</p>
                                </div>
                            </div>
                        </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                ABOUT THE ARTIST
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>{{ $work->artist->biography }}</p>
                            </div>
                        </div>
                    </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                    SHIPPING AND RETURNS
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna. </p>
                                </div>
                            </div>
                        </div>

                </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="slideсard__title">
                <h3 style="font-size: 3rem;" class="fw-light">Recommendations</h3>
            </div>
        </div>
        <div class="swiper slideSlider mt-0">
            <div class="swiper-wrapper">
                @foreach($latest_works as $work)
                    <div class="swiper-slide">
                        <div class="slideсard__img">
                            <img class="showcase__img" src="{{ asset($work->image_path) }}" alt="{{ $work->name }}">
                        </div>
                        <div class="slideсard__info">
                            <h3>{{ $work->artist->full_name }}</h3>
                            <h4>{{ $work->name }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-scrollbar"></div>
        </div>

    </div>



    <div class="modal fade rarityModal" id="rarityModal"     data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="border-radius: 0;">
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
