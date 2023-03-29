@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
    <div class="container">
        <h2 class="title-h2">Artists</h2>

{{--        <div class="search-container mt-3">--}}
{{--            <input onkeyup="myFunction()" class="search" id="myInput" type="text" placeholder="Search">--}}
{{--            <label class="searchbutton" for="search"><i class="fas fa-magnifying-glass"></i></label>--}}
{{--        </div>--}}

        <ul class="artist-list"  id="myUL">
            @foreach($artists  as $artist)
                <li>
                    <a href="{{ route('frontend.artist', $artist->id) }}">{{ $artist->full_name }}</a>
                    <img src="{{ asset($artist->image_path) }}" alt="{{ $artist->full_name }}">
                </li>
            @endforeach
        </ul>
    </div>

@endsection

@push("after-scripts")
    <script>
        function myFunction() {
            // Declare variables
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById('myInput');
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName('li');

            // Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>
@endpush
