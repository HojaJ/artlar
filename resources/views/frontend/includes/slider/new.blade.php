<div class="swiper newSlider" dir="rtl">
    <div class="swiper-wrapper">
        @foreach($latest_works as $work)

                <div class="swiper-slide">
                    <a href="{{ route('frontend.work', $work->id) }}" class="d-block">
                    <div class="arrivals__img">
                        <img src="{{ asset($work->image_path) }}" alt="img">

                        <div class="arrivals__info" dir="ltr">
                            <h3>{{ucfirst(substr($work->artist->name, 0, 1))}}. {{ $work->artist->surname }}</h3>
                            <h4>{{ $work->name }}</h4>
                        </div>
                    </div>
                    </a>
                </div>
        @endforeach
    </div>
</div>
