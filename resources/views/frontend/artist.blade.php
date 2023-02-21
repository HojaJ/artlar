@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
    <div class="artist-page">
        <div class="container position-relative">
            <!--           <div class="d-flex justify-content-between align-items-end">-->
            <!--               <img src="/img/artist2.png" alt="Artist" class="img-fluid">-->
            <!--               <h2>Frida Kahlo</h2>-->
            <!--           </div>-->
            <div class="artist__sticky">
                <div class="row flex-column-reverse flex-lg-row">
                    <div class="col-lg-6">
                        <div class="artist__info">
                            <h4 class="artist__info-name">{{ $artist->full_name }}</h4>
                            <p class="artist__info-prof">{{ $artist->profession->name }}</p>
                            <p class="artist__info-country">{{ $artist->country->name }}</p>
                            <p class="artist__info-date">Born: {{ $artist->dob }}</p>
                            @if($artist->dead && $artist->dod )
                                <p class="artist__info-date">Died: {{$artist->dod}}</p>
                            @endif

                            <p class="artist__info-desc">
                                @if($artist->biography)
                                    {{ $artist->biography }}
                                @else
                                    Lorem ipsum dolor sit amet.
                                @endif
                            </p>

                            <button type="button" class="button button-cv" data-bs-toggle="modal" data-bs-target="#cvModal">
                                CV
                            </button>

                            <div class="modal fade cvModal" id="cvModal"  data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content modal-dialog-scrollable modal-dialog-centered ">
                                        <div class="p-5 artist-modal">
                                            <button type="button" class="btn-close d-block ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                                            {!! $artist->cv !!}

{{--                                            <h4>Education</h4>--}}
{{--                                            <ul>--}}
{{--                                                <li>2005, Master’s degree in Visual Arts with honorable mention, École Nationale Supérieure de la Photographie (National School of Photography) Arles, France</li>--}}
{{--                                                <li>2001, Degree in Performing Arts, Paul Valéry University, Montpellier, France</li>--}}
{{--                                            </ul>--}}
{{--                                            <h4>Solo shows</h4>--}}
{{--                                            <ul>--}}
{{--                                                <li>2021-22, Who’s Next? (Public Art) Curated by Daniel Talesnik, Nov 4, 2021 – Feb 6, 2022, Architekturmuseum der TUM, Munich, Germany</li>--}}
{{--                                                <li>2020, Passageway (permanent textile art installation), August 15, Hyatt Centric Philadelphia, PA</li>--}}
{{--                                                <li>2018, Kalos-Sthénos (permanent public installation), September 6, Parc des Sens, St Priest, France</li>--}}
{{--                                                <li>2018, Waiting to be found, April 6 – May 5, Equity Gallery, Lower East Side, NY</li>--}}
{{--                                                <li>2018, Sidewalk Sightings: People without Homes, Feb 26 - April 12, Bernstein Gallery, Princeton University, NJ</li>--}}
{{--                                            </ul>--}}
{{--                                            <h4>Group shows</h4>--}}
{{--                                            <ul>--}}
{{--                                                <li>2022, Thread in Motion curated by Blanka Amezkua, April 17 - April 30, East Village Art View, NYC</li>--}}
{{--                                                <li>2022 Artists Draw Their Studios curated by Michelle Weinberg, April 4 - May 4, Marymount Manhattan College, Hewitt Gallery of Art, NY</li>--}}
{{--                                            </ul>--}}
{{--                                            <h4>Awards</h4>--}}
{{--                                            <ul>--}}
{{--                                                <li>2022, Sustainable Arts Foundation, Juror</li>--}}
{{--                                                <li>2021, MacDowell Fellowship, Peterborough, NH</li>--}}
{{--                                                <li>2021, MacArthur Place Residency organized by Tappan, Sonoma, CA</li>--}}
{{--                                                <li>2020, NYSCA/NYFA Artist Fellowship, Craft/Sculpture Fellow</li>--}}
{{--                                            </ul>--}}
{{--                                            <h4>Publications</h4>--}}
{{--                                            <ul>--}}
{{--                                                <li>2021, Frankfurter Allgemeine Zeitung, Germany (print) Nov 13</li>--}}
{{--                                                <li>2021, Süddeutsche Zeitung, Munich (print) Nov 4</li>--}}
{{--                                                <li>2021, Artfully Learning, Exquisite Community, Adam Zucker, Feb 1</li>--}}
{{--                                            </ul>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6  text-lg-end">
                        <img src="{{ asset($artist->image) }}" alt="Artist" class="img-fluid artist-photo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="slideсard">
            <div class="swiper slideSlider">
                <div class="swiper-wrapper">
                    @foreach($artist->works as $work)
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
                {{--    <div class="swiper-pagination"></div>--}}
            </div>

{{--            @include('frontend.includes.slider.work')--}}
            <a class="slideсard__title d-inline-block" href="javascript:void(0);">
                <h2 class="title-h2">Works</h2>
            </a>
        </div>
    </div>
    <div class="artists-list">
        <div class="container">
            <ul class="text-center">
                @foreach($artists as $artist_)
                    <li><a @if($artist_->id === $artist->id) class="active" @endif   href="{{ route('frontend.artist', $artist_->id) }}">{{ $artist_->full_name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection
