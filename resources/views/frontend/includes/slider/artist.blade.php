<div class="swiper slideSlider">
    <div class="swiper-wrapper">
        @foreach($artists as $artist)

                <div class="swiper-slide">
                    <a href="{{ route('frontend.artist', $artist->id) }}">
                    <div class="slideсard__img">
                        <img class="showcase__img" src="{{asset($artist->image_path)}}" alt="{{ $artist->fullname }}">
                    </div>
                    <div class="slideсard__info">
                        <h3>{{ $artist->fullname }}</h3>
                        <h4>{{ $artist->country?->name }}</h4>
                    </div>
                    </a>
                </div>

        @endforeach
    </div>
    <div class="swiper-scrollbar"></div>
{{--    <div class="swiper-pagination"></div>--}}
</div>
