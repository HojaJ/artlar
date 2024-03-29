@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

    <div class="container">
        <h2 class="title-h2">Works</h2>
        <section class="shop spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="shop__sidebar">
                            <div class="shop__sidebar__accordion">

                                <div class="accordion1" id="accordionExample">

                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-bs-toggle="collapse" href="#collapse1" role="button" class="collapsed" aria-expanded="false">Artists</a>
                                        </div>

                                        <div id="collapse1" class="collapse show">
                                            <div class="card-body">
                                                <div class="shop__sidebar__categories">
                                                    <ul class="nice-scroll" tabindex="1">
                                                        @foreach($all_artist as $artist)
                                                            <li><label><input type="checkbox" class="artist-checkbox" name="artist" value="{{$artist->id}}">{{$artist->full_name}}</label></li>
                                                        @endforeach
{{--                                                        <li><label><input type="checkbox">Abraham Arkhipov</label></li>--}}
{{--                                                        <li><label><input type="checkbox">Frida Kahlo</label></li>--}}
{{--                                                        <li><label><input type="checkbox">Van Eyck</label></li>--}}
{{--                                                        <li><label><input type="checkbox">Caravaggio</label></li>--}}
{{--                                                        <li><label><input type="checkbox">Oscar-Claude Monet</label></li>--}}
{{--                                                        <li><label><input type="checkbox">Leonardo da Vinci</label></li>--}}
{{--                                                        <li><label><input type="checkbox">Giotto</label></li>--}}
{{--                                                        <li><label><input type="checkbox">Pablo Picasso</label></li>--}}
{{--                                                        <li><label><input type="checkbox">Michelangelo</label></li>--}}
{{--                                                        <li><label><input type="checkbox">Bacon</label></li>--}}
{{--                                                        <li><label><input type="checkbox">Paul Klee</label></li>--}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-bs-toggle="collapse" href="#collapse2" role="button" class="collapsed" aria-expanded="false">Rarity</a>
                                        </div>

                                        <div id="collapse2" class="collapse">
                                            <div class="card-body">
                                                <div class="shop__sidebar__categories">
                                                    <ul class="nice-scroll" tabindex="1">
                                                        <li><label><input type="checkbox">Unique</label></li>
                                                        <li><label><input type="checkbox">Limited Edition</label></li>
                                                        <li><label><input type="checkbox">Open Edition</label></li>
                                                        <li><label><input type="checkbox">Unknown Edition</label></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-bs-toggle="collapse" href="#collapse3" role="button" class="collapsed" aria-expanded="false">Medium</a>
                                        </div>

                                        <div id="collapse3" class="collapse">
                                            <div class="card-body">
                                                <div class="shop__sidebar__categories">
                                                    <ul class="nice-scroll" tabindex="1">
                                                        <li><label><input type="checkbox">Painting</label></li>
                                                        <li><label><input type="checkbox">Photography</label></li>
                                                        <li><label><input type="checkbox">Sculpture</label></li>
                                                        <li><label><input type="checkbox">Prints</label></li>
                                                        <li><label><input type="checkbox">NFT</label></li>
                                                        <li><label><input type="checkbox">Work on paper</label></li>
                                                        <li><label><input type="checkbox">Contemprory art</label></li>
                                                        <li><label><input type="checkbox">Modern art</label></li>
                                                        <li><label><input type="checkbox">Street art</label></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-bs-toggle="collapse" href="#collapse4" role="button" class="collapsed" aria-expanded="false">Price</a>
                                        </div>

                                        <div id="collapse4" class="collapse">
                                            <div class="card-body">
                                                <div class="shop__sidebar__categories">
                                                    <ul class="nice-scroll" tabindex="1" >
                                                        <li><a href="#">$0.00 - $50.00</a></li>
                                                        <li><a href="#">$50.00 - $100.00</a></li>
                                                        <li><a href="#">$100.00 - $150.00</a></li>
                                                        <li><a href="#">$150.00 - $200.00</a></li>
                                                        <li><a href="#">$200.00 - $250.00</a></li>
                                                        <li><a href="#">250.00+</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-bs-toggle="collapse" href="#collapse5" role="button" class="collapsed" aria-expanded="false">Size</a>
                                        </div>

                                        <div id="collapse5" class="collapse">
                                            <div class="card-body">
                                                <div class="shop__sidebar__categories">
                                                    <ul class="nice-scroll" tabindex="1" >
                                                        <li><label><input type="checkbox">Small (under 40cm)</label></li>
                                                        <li><label><input type="checkbox">Medium (40-100cm)</label></li>
                                                        <li><label><input type="checkbox">Lage (over 100cm)</label></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-bs-toggle="collapse" href="#collapse6" role="button" class="collapsed" aria-expanded="false">Artist Nationality</a>
                                        </div>

                                        <div id="collapse6" class="collapse">
                                            <div class="card-body">
                                                <div class="shop__sidebar__categories">
                                                    <ul class="nice-scroll" tabindex="1">
                                                        <li><label><input type="checkbox">Algerian</label></li>
                                                        <li><label><input type="checkbox">American</label></li>
                                                        <li><label><input type="checkbox">Angolan</label></li>
                                                        <li><label><input type="checkbox">Argentine</label></li>
                                                        <li><label><input type="checkbox">Armenian</label></li>
                                                        <li><label><input type="checkbox">Australian</label></li>
                                                        <li><label><input type="checkbox">Russian</label></li>
                                                        <li><label><input type="checkbox">Mexican</label></li>
                                                        <li><label><input type="checkbox">Kazak</label></li>
                                                        <li><label><input type="checkbox">Tajik</label></li>
                                                        <li><label><input type="checkbox">Turkmen</label></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-bs-toggle="collapse" href="#collapse7" role="button" class="collapsed" aria-expanded="false">Time Period</a>
                                        </div>

                                        <div id="collapse7" class="collapse">
                                            <div class="card-body">
                                                <div class="shop__sidebar__categories">
                                                    <ul class="nice-scroll" tabindex="1">
                                                        <li><label><input type="checkbox">2020s</label></li>
                                                        <li><label><input type="checkbox">2010s</label></li>
                                                        <li><label><input type="checkbox">2000s</label></li>
                                                        <li><label><input type="checkbox">1990s</label></li>
                                                        <li><label><input type="checkbox">1980s</label></li>
                                                        <li><label><input type="checkbox">1970s</label></li>
                                                        <li><label><input type="checkbox">1960s</label></li>
                                                        <li><label><input type="checkbox">1950s</label></li>
                                                        <li><label><input type="checkbox">1940s</label></li>
                                                        <li><label><input type="checkbox">1930s</label></li>
                                                        <li><label><input type="checkbox">1920s</label></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="row" id="works_wrapper">
                            @include('frontend.work_load')

                            <div class="ajax-load text-center" style="display:none">
                                <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('after-scripts')
    <script type="text/javascript">
        window.jQuery(function($) {
            let url;
            let artists = [];
            $('.artist-checkbox').change(function (){
                $('.artist-checkbox').each(function () {
                    if(this.checked){
                        artists.push(parseInt(this.value))
                    }
                })

                updateTheContent(artists);
            })

            function updateTheContent(artists) {
                let pathname = window.location.pathname;

                // window.history.pushState('artists','artists', 'artists=[' + artists+']');
                $.ajax(
                    {
                        url: '?artists=' + artists,
                        type: "get",
                        // beforeSend: function () {
                        //     $('.ajax-load').show();
                        // }
                    })
                    .done(function (data) {
                        $("#works_wrapper").load(data.html);
                    })
                    .fail(function (jqXHR, ajaxOptions, thrownError) {
                        alert('server not responding...');
                    });
            }

            var page = 1;
            $(window).scroll(function () {
                if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                    page++;
                    loadMoreData(page);
                }
            });
            function loadMoreData(page) {
                $.ajax(
                    {
                        url: '?page=' + page,
                        type: "get",
                        beforeSend: function () {
                            $('.ajax-load').show();
                        }
                    })
                    .done(function (data) {
                        if (data.html == " ") {
                            $('.ajax-load').html("No more records found");
                            return;
                        }
                        $('.ajax-load').hide();
                        $("#works_wrapper").append(data.html);
                    })
                    .fail(function (jqXHR, ajaxOptions, thrownError) {
                        alert('server not responding...');
                    });
            }
        })
    </script>
@endpush

