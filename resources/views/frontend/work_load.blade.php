@foreach($works as $work)
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="product__item">
            <div class="product__item__pic">
                <a class="d-flex justify-content-center align-items-end" href="{{ route('frontend.work', $work->id) }}"><img src="{{ asset($work->image_path) }}" alt="{{ $work->name }}"></a>
            </div>

            <div class="product__item__text">
                <h6>{{ucfirst(substr($work->artist->name, 0, 1))}}. {{ $work->artist->surname }}</h6>
                <a href="{{ route('frontend.work',$work->id) }}">{{ $work->name }}</a>
                <h5>{{ $work->price }}$</h5>
            </div>
        </div>
    </div>
@endforeach
