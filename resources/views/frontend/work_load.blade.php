@foreach($works as $work)
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="product__item">
            <div class="product__item__pic">
                <a href="{{ route('frontend.work', $work->id) }}"><img src="{{ asset($work->image_path) }}" alt="{{ $work->name }}"></a>
            </div>

            <div class="product__item__text">
                <h6>{{ $work->artist->fullname }}</h6>
                <a href="{{ route('frontend.work',$work->id) }}">{{ $work->name }}</a>
                <h5>{{ $work->price }}$</h5>
            </div>
        </div>
    </div>
@endforeach
