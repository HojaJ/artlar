@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
    <div class="container">
        <h2 class="title-h2">Artists</h2>
        <ul class="artist-list">
            <li><a href="{{ route('frontend.artist') }}">Azimus Deryayev</a> <img src="{{ asset('img/artist2.png') }}" alt="Artist"></li>
            <li><a href="{{ route('frontend.artist') }}">Abram Arkhipov</a> <img src="{{ asset('img/artist.png') }}" alt="Artist"></li>
            <li><a href="{{ route('frontend.artist') }}">Frida Kahlo</a> <img src="{{ asset('img/artist2.png') }}" alt="Artist"></li>
            <li><a href="{{ route('frontend.artist') }}">Van Eyck</a> <img src="{{ asset('img/artist.png') }}" alt="Artist"></li>
            <li><a href="{{ route('frontend.artist') }}">Caravaggio</a> <img src="{{ asset('img/artist2.png') }}" alt="Artist"></li>
            <li><a href="{{ route('frontend.artist') }}">Oscar-Claude Monet</a> <img src="{{ asset('img/artist.png') }}" alt="Artist"></li>
            <li><a href="{{ route('frontend.artist') }}">Michelangelo</a> <img src="{{ asset('img/artist2.png') }}" alt="Artist"></li>
            <li><a href="{{ route('frontend.artist') }}">Van Gogh</a> <img src="{{ asset('img/artist.png') }}" alt="Artist"></li>
            <li><a href="{{ route('frontend.artist') }}">Bacon</a> <img src="{{ asset('img/artist2.png') }}" alt="Artist"></li>
            <li><a href="{{ route('frontend.artist') }}">Jenny Saville</a> <img src="{{ asset('img/artist.png') }}" alt="Artist"></li>
            <li><a href="{{ route('frontend.artist') }}">Paul Klee</a> <img src="{{ asset('img/artist2.png') }}" alt="Artist"></li>
            <li><a href="{{ route('frontend.artist') }}">Rembrandt</a> <img src="{{ asset('img/artist.png') }}" alt="Artist"></li>
            <li><a href="{{ route('frontend.artist') }}">Salvador Dalí</a> <img src="{{ asset('img/artist2.png') }}" alt="Artist"></li>
            <li><a href="{{ route('frontend.artist') }}">Avigdor Arikha</a> <img src="{{ asset('img/artist.png') }}" alt="Artist"></li>
            <li><a href="{{ route('frontend.artist') }}">Yayoi Kusama</a> <img src="{{ asset('img/artist2.png') }}" alt="Artist"></li>
        </ul>
    </div>

@endsection
