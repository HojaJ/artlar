@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
    <div class="container">
        <h2 class="title-h2">In the News</h2>
        @foreach($innews as $news)
            <div class="row mt-5 mb-6">
                <div class="col-md-3">
                    <img src="{{ asset($news->image_path) }}" alt="{{$news->website}}">
                </div>
                <div class="col-md-9">
                    <div class="in_the_block">
                        <h3>{{$news->website}}</h3>
                        <h5>{{$news->name}}</h5>
                        <p>
                            {{ $news->description }}
                        </p>
                        </div>
                </div>
            </div>
        @endforeach
        {{ $innews->links('vendor.pagination.default') }}
    </div>

@endsection
