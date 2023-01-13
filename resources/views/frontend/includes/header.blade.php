<header class="header">
    <nav class="navbar navbar-expand-lg flex-lg-wrap">
        <div class="container flex-lg-row-reverse position-relative">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="text-center w-lg-100">
                @include('frontend.includes.logo')
            </div>

            @include('frontend.includes.search')

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav  w-100 justify-content-around mb-2 mb-lg-0">
                    <li class="nav-item">
{{--                        <a class="nav-link" href="#">Artists</a>--}}
                        <a class="nav-link" href="{{ route('frontend.artists') }}">Artists</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.works') }}">Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">New Arrivals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Auctions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.news') }}">News</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

</header>
