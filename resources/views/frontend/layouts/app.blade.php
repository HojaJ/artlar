<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon.png')}}">

    <link rel="icon" type="image/png" href="{{asset('img/favicon/favicon.ico')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('img/favicon/android-chrome-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">



    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ setting('meta_description') }}">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <meta name="keyword" content="{{ setting('meta_keyword') }}">

    <link rel="stylesheet" href="{{ asset('fonts/girona/girona.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome.css') }}">

    @include('frontend.includes.meta')

    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/ico" href="{{asset('img/favicon.png')}}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('before-styles')

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
{{--    <link rel="stylesheet" href="{{ mix('css/frontend.css') }}">--}}

    @stack('after-styles')

{{--    <x-google-analytics />--}}

</head>

{{--<script>--}}
{{--    document.addEventListener("DOMContentLoaded", function (event) {--}}
{{--        var scrollpos = localStorage.getItem("scrollpos");--}}
{{--        if (scrollpos) window.scrollTo(0, scrollpos);--}}
{{--    });--}}

{{--    window.onscroll = function (e) {--}}
{{--        localStorage.setItem("scrollpos", window.scrollY);--}}
{{--    };--}}
{{--</script>--}}
<body>

    @include('frontend.includes.header')


    <main>
        @yield('content')
    </main>

    @include('frontend.includes.footer')

</body>

<!-- Scripts -->
@stack('before-scripts')

{{--<script src="{{ mix('js/frontend.js') }}"></script>--}}
<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

@stack('after-scripts')

</html>
