<footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
                @include('frontend.includes.logo')
            </div>
            <div class="col-6">
                @include('frontend.includes.social')
            </div>
        </div>
        <div class="row align-items-center footer__half">
            <div class="col-lg-6">
                @include('frontend.includes.newsletter')
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="d-flex justify-content-between justify-content-lg-end ">
                    <ul class="footer__links me-md-5">
                        <li><a href="{{ route('frontend.in_the_news') }}">In the News</a></li>
                        <li><a href="{{ route('frontend.about') }}">About us</a></li>
                        <li><a href="{{ route('frontend.contact') }}">Contact us</a></li>
                    </ul>

                    <ul class="footer__links ms-md-5">
                        <li><a href="{{ route('frontend.faq') }}">FAQ</a></li>
                        <li><a href="{{ route('frontend.terms')}}">Terms & Policy</a></li>
{{--                        <li><a href="{{ route('frontend.wishlist')}}">Wishlist</a></li>--}}
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>
