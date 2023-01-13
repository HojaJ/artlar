@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
    <div class="container">
        <h2 class="title-h2">News</h2>
        <div class="row mt-5">
            <div class="col-md-6">
                <img src="{{ asset('img/news.png') }}" alt="News">
            </div>
            <div class="col-md-6">
                <div class="news_block">
                    <h3>Creative Forum Opeing in Ashgabat</h3>
                    <time>Nov 20, 2022</time>
                    <p>
                        This Agreement shall be governed by and construed according to the laws of the State of California and the United States, excluding California's conflicts of laws rules. Any claim or cause of action arising from or related to this Agreement or your use of the Site shall be filed solely and exclusively in an appropriate state or federal court located in Los Angeles County in the State of California, and you irrevocably consent to the personal jurisdiction of such courts and waive any objections you may have to such courts as the sole venue for any such claim or cause of action, including but not limited to any claim that any such court is an inconvenient forum. In the event of any conflict between U.S. and foreign laws, rules and regulations, those of the U.S. will govern. The United Nations Convention on Contracts for the International Sale of Goods will not apply to this Agreement.
                    </p>
                </div>
            </div>
        </div>

        <h3 class="latest_news_head">Latest news</h3>
    </div>


    <div class="latest_news">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <time>Nov 20, 2022</time>
                </div>
                <div class="col-lg-3">
                    <img src="{{asset('img/latest_1.png')}}" alt="Latest News">
                </div>
                <div class="col-lg-6">
                    <div class="latest_news_block">
                        <h3>The Museum of Modern Art in New York</h3>
                        <p>An important Picasso exhibition on November 15, 1939 that remained on view until January 7, 1940. The exhibition entitled: Picasso:40 Years of His Art, was organized by Alfred H. Barr (1902 - 1981), in collaboration with the Art Institute of Chicago.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="latest_news">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <time>Nov 20, 2022</time>
                </div>
                <div class="col-lg-3">
                    <img src="{{asset('img/latest_2.png')}}" alt="Latest News">
                </div>
                <div class="col-lg-6">
                    <div class="latest_news_block">
                        <h3>Creative Forum Opeing in Ashgabat</h3>
                        <p>
                            This Agreement shall be governed by and construed according to the laws of the State of California and the United States, excluding California's conflicts of laws rules.
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="latest_news">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <time>Nov 20, 2022</time>
                </div>
                <div class="col-lg-3">
                    <img src="{{ asset('img/latest_3.png') }}" alt="Latest News">
                </div>
                <div class="col-lg-6">
                    <div class="latest_news_block">
                        <h3>The Creation of Adam, Michelangelo</h3>
                        <p>
                            This Agreement shall be governed by and construed according to the laws of the State of California and the United States, excluding California's conflicts of laws rules.                            </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.includes.pagination')

@endsection
