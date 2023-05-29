@extends('admin.layouts.master')
@section('content')

@if(Auth::user()->is_admin == 1)
<section class="content">
    <h1>
        Dashboard
    </h1>

@else

          <section class="content-header">
            <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
            <h1>Template and Tools to manage Every Aspect of Your Business</h1>
       
          </section>
@endif

    <div class="row">
    @if(Auth::user()->is_admin == 1)

           @include('admin.dashboard.admin_panel')
        
    @else

           @include('admin.dashboard.customer_panel')
   
    @endif
    </div>
    
</section>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script>
    var ENDPOINT = "{{ url('document-list') }}";

var page = 1;

infinteLoadMore(page);

$(window).scroll(function () {

    if ($(window).scrollTop() + $(window).height() >= $(document).height()) {

        page++;

        infinteLoadMore(page);

    }

});

function infinteLoadMore(page) {

    $.ajax({

        type: 'GET',

        url: '{{url("document-list")}}?page=' + page,

        data: {},

        dataType: 'html',

        })

        .done(function (response) {

            console.log("length : " +  response.length);

            if (response.length == 0) {

                $('.auto-load').html("We don't have more data to display :(");

                return;

            }

            $('.auto-load').hide();

            $("#getDocumentList").append(response);

        })

        .fail(function (jqXHR, ajaxOptions, thrownError) {

            console.log('Server error occured');

        });

}


 </script>