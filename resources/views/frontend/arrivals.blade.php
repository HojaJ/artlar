@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

    <div class="container">
        <h2 class="title-h2 mb-5">New Arrivals</h2>
        <div class="row" id="works_wrapper">
            @include('frontend.work_load')

            <div class="ajax-load text-center" style="display:none">
                <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
            </div>
        </div>

    </div>
@endsection
@push('after-scripts')
    <script type="text/javascript">
        window.jQuery(function($) {
            var page = 1;
            $(window).scroll(function () {
                if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                    page++;
                    loadMoreData(page);
                }
            });

            function loadMoreData(page) {
                $.ajax(
                    {
                        url: '?page=' + page,
                        type: "get",
                        beforeSend: function () {
                            $('.ajax-load').show();
                        }
                    })
                    .done(function (data) {
                        if (data.html == " ") {
                            $('.ajax-load').html("No more records found");
                            return;
                        }
                        $('.ajax-load').hide();
                        $("#works_wrapper").append(data.html);
                    })
                    .fail(function (jqXHR, ajaxOptions, thrownError) {
                        alert('server not responding...');
                    });
            }
        })
    </script>
@endpush
