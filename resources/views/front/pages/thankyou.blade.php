@extends('front.layouts.master')

@section('content')

<section id="error_sec">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="error_content row justify-content-center">
              <h1>Thank You!</h1>
              <img class="img-fluid thank_icon mt-5 mb-0" src="{{asset('front/img/thank_you_icon.png')}}">
              
          </div>

          <div class="justify-content-center thank_content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
            <p class="mt-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,</p>
          </div>
        </div>
        </div>
      </div>       
     </section>

@stop