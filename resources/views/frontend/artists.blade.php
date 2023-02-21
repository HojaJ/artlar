@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
    <div class="container">
        <h2 class="title-h2">Artists</h2>
        <ul class="artist-list">
            @foreach($artists  as $artist)
                <li>
                    <a href="{{ route('frontend.artist', $artist->id) }}">{{ $artist->full_name }}</a>
                    <img src="{{ asset($artist->image_path) }}" alt="{{ $artist->full_name }}">
                </li>
            @endforeach
        </ul>
    </div>

@endsection
