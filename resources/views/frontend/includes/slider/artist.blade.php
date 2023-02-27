<div class="swiper slideSlider">
    <div class="swiper-wrapper">
        @foreach($artists as $artist)

                <div class="swiper-slide">
                    <a href="{{ route('frontend.artist', $artist->id) }}">
                    <div class="slideсard__img">
                        <img class="showcase__img" src="{{asset($artist->image_path)}}" alt="{{ $artist->fullname }}">
                    </div>
                    <div class="slideсard__info">
                        <h3>{{ucfirst(substr($artist->name, 0, 1))}}. {{ $artist->surname }}</h3>
                        <h4>{{ $artist->country?->name }}</h4>
                    </div>
                    </a>
                </div>

        @endforeach
        <div class="swiper-slide">
            <div class="justify-content-center align-items-center see_all_link">
                <a href="{{ route('frontend.artists') }}">See All <i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="swiper-scrollbar"></div>
{{--    <div class="swiper-pagination"></div>--}}
</div>
