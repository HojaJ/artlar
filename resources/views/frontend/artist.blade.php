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
                            <h4 class="artist__info-name">Frida Kahlo</h4>
                            <p class="artist__info-prof">Painter</p>
                            <p class="artist__info-country">Mexica</p>
                            <p class="artist__info-date">Born: July 6, 1907</p>
                            <p class="artist__info-date">Died: July 13, 1954</p>
                            <p class="artist__info-desc">
                                Frida Kahlo was a Mexican painter best known for her uncompromising and brilliantly colored self-portraits that deal with such themes as identity, the human body, and death. Although she denied the connection, she is often identified as a Surrealist.<br><br>
                                In addition to her work, Kahlo was known for her tumultuous relationship with muralist Diego Rivera (married 1929, divorced 1939, remarried 1940).
                            </p>

                            <button type="button" class="button button-cv" data-bs-toggle="modal" data-bs-target="#cvModal">
                                CV
                            </button>

                            <div class="modal fade cvModal" id="cvModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content modal-dialog-scrollable modal-dialog-centered ">
                                        <div class="p-5 artist-modal">
                                            <button type="button" class="btn-close d-block ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <h4>Education</h4>
                                            <ul>
                                                <li>2005, Master’s degree in Visual Arts with honorable mention, École Nationale Supérieure de la Photographie (National School of Photography) Arles, France</li>
                                                <li>2001, Degree in Performing Arts, Paul Valéry University, Montpellier, France</li>
                                            </ul>
                                            <h4>Solo shows</h4>
                                            <ul>
                                                <li>2021-22, Who’s Next? (Public Art) Curated by Daniel Talesnik, Nov 4, 2021 – Feb 6, 2022, Architekturmuseum der TUM, Munich, Germany</li>
                                                <li>2020, Passageway (permanent textile art installation), August 15, Hyatt Centric Philadelphia, PA</li>
                                                <li>2018, Kalos-Sthénos (permanent public installation), September 6, Parc des Sens, St Priest, France</li>
                                                <li>2018, Waiting to be found, April 6 – May 5, Equity Gallery, Lower East Side, NY</li>
                                                <li>2018, Sidewalk Sightings: People without Homes, Feb 26 - April 12, Bernstein Gallery, Princeton University, NJ</li>
                                            </ul>
                                            <h4>Group shows</h4>
                                            <ul>
                                                <li>2022, Thread in Motion curated by Blanka Amezkua, April 17 - April 30, East Village Art View, NYC</li>
                                                <li>2022 Artists Draw Their Studios curated by Michelle Weinberg, April 4 - May 4, Marymount Manhattan College, Hewitt Gallery of Art, NY</li>
                                            </ul>
                                            <h4>Awards</h4>
                                            <ul>
                                                <li>2022, Sustainable Arts Foundation, Juror</li>
                                                <li>2021, MacDowell Fellowship, Peterborough, NH</li>
                                                <li>2021, MacArthur Place Residency organized by Tappan, Sonoma, CA</li>
                                                <li>2020, NYSCA/NYFA Artist Fellowship, Craft/Sculpture Fellow</li>
                                            </ul>
                                            <h4>Publications</h4>
                                            <ul>
                                                <li>2021, Frankfurter Allgemeine Zeitung, Germany (print) Nov 13</li>
                                                <li>2021, Süddeutsche Zeitung, Munich (print) Nov 4</li>
                                                <li>2021, Artfully Learning, Exquisite Community, Adam Zucker, Feb 1</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6  text-lg-end">
                        <img src="{{ asset('img/artist2.png') }}" alt="Artist" class="img-fluid artist-photo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="slideсard">
            @include('frontend.includes.slider.work')
            <a class="slideсard__title d-inline-block" href="javascript:void(0);">
                <h2 class="title-h2">Works</h2>
            </a>
        </div>
    </div>
    <div class="artists-list">
        <div class="container">
            <ul class="text-center">
                <li><a href="{{ route('frontend.artist') }}">Azimus Deryayev</a></li>
                <li><a href="{{ route('frontend.artist') }}">Abraham Arkhipov</a></li>
                <li><a class="active" href="{{ route('frontend.artist') }}">Frida Kahlo</a></li>
                <li><a href="{{ route('frontend.artist') }}">Van Eyck</a></li>
                <li><a href="{{ route('frontend.artist') }}">Caravaggio</a></li>
                <li><a href="{{ route('frontend.artist') }}">Oscar-Claude Monet</a></li>
                <li><a href="{{ route('frontend.artist') }}">Leonardo da Vinci</a></li>
                <li><a href="{{ route('frontend.artist') }}">Giotto</a></li>
                <li><a href="{{ route('frontend.artist') }}">Pablo Picasso</a></li>
                <li><a href="{{ route('frontend.artist') }}">Michelangelo</a></li>
                <li><a href="{{ route('frontend.artist') }}">Van Gogh</a></li>
                <li><a href="{{ route('frontend.artist') }}">Bacon</a></li>
                <li><a href="{{ route('frontend.artist') }}">Jenny Saville</a></li>
                <li><a href="{{ route('frontend.artist') }}">Paul Klee</a></li>
                <li><a href="{{ route('frontend.artist') }}">Rembrandt</a></li>
                <li><a href="{{ route('frontend.artist') }}">Salvador Dali</a></li>
                <li><a href="{{ route('frontend.artist') }}">Avigdor Arikha</a></li>
            </ul>
        </div>
    </div>

@endsection
