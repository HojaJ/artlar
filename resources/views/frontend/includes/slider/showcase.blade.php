<div class="swiper heroSlider">
    <div class="swiper-wrapper">
        @foreach($latest_works as $work)
            <div class="swiper-slide">
                <div class="swiper-zoom-container">
                    <a href="{{ route('frontend.work', $work->id) }}">
                        <img class="showcase__img" src="{{asset($work->image_path)}}" alt="{{ $work->name }}">
                    </a>
                </div>
                <div class="showcase__info">
                    <h3>{{ $work->artist->full_name }}</h3>
                    <h4>{{ $work->name }}</h4>
                    <span>{{ $work->price }}$</span>
                </div>
            </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>
