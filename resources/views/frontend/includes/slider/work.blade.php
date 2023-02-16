<div class="swiper slideSlider">
    <div class="swiper-wrapper">
        @foreach($latest_works as $work)
            <div class="swiper-slide">
                <div class="slideсard__img">
                    <img class="showcase__img" src="{{ asset($work->image) }}" alt="{{ $work->name }}">
                </div>
                <div class="slideсard__info">
                    <h3>Azimus Deryayev</h3>
                    <h4>{{ $work->name }}</h4>
                </div>
            </div>
        @endforeach
    </div>
    <div class="swiper-scrollbar"></div>
{{--    <div class="swiper-pagination"></div>--}}
</div>

