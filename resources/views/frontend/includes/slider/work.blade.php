<div class="swiper slideSlider">
    <div class="swiper-wrapper">
        @foreach($latest_works as $work)
            <div class="swiper-slide">
                <a href="{{ route('frontend.work', $work->id) }}">
                <div class="slideсard__img">
                    <img class="showcase__img" src="{{ asset($work->image_path) }}" alt="{{ $work->name }}">
                </div>
                <div class="slideсard__info">
                    <h3>{{ $work->artist->full_name }}</h3>
                    <h4>{{ $work->name }}</h4>
                </div>
                </a>
            </div>
        @endforeach
            <div class="swiper-slide">
                <div class="justify-content-center align-items-center see_all_link">
                    <a href="{{ route('frontend.works') }}">See All <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
    </div>
    <div class="swiper-scrollbar"></div>
{{--    <div class="swiper-pagination"></div>--}}
</div>

