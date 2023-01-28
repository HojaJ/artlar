<ul class="d-flex justify-content-end">
    <li class="social">
        @if(setting('facebook_url'))
            <a href="{{ setting('facebook_url') }}" target="_blank" class="d-block social__link"><i class="fa-brands fa-facebook"></i></a>
        @endif
    </li>
    <li class="social">
        @if(setting('instagram_url'))
            <a href="{{ setting('instagram_url') }}" target="_blank" class="d-block social__link"><i class="fa-brands fa-instagram"></i></a>
        @endif
    </li>
    <li class="social">
        @if(setting('telegram_url'))
            <a href="{{setting('telegram_url')}}" target="_blank" class="d-block social__link"><i class="fa-brands fa-telegram"></i></a>
        @endif
    </li>
</ul>
