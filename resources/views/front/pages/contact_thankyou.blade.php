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
            <p class="mt-5">Thank you for reaching out to us. For any further queries about the business documents and how they can help you grow your business, don’t hesitate to connect with our experts.</p>
          </div>
        </div>
        </div>
      </div>       
     </section>

@stop