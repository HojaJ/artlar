<ul class="d-flex justify-content-end">
    <li class="social">
        @if(setting('twitter_url'))
            <a href="{{ setting('twitter_url') }}" target="_blank" class="d-block social__link"><i class="fa-brands fa-twitter"></i></a>
        @endif
    </li>
    <li class="social">
        @if(setting('linkedin_url'))
            <a href="{{setting('linkedin_url')}}" target="_blank" class="d-block social__link"><i class="fa-brands fa-linkedin-in"></i></a>
        @endif
    </li>
    <li class="social">
        @if(setting('instagram_url'))
            <a href="{{ setting('instagram_url') }}" target="_blank" class="d-block social__link"><i class="fa-brands fa-instagram"></i></a>
        @endif
    </li>
</ul>
