@extends('front.layouts.master')

@section('content')
<section id="error_sec">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 mx-auto">
          <div class="error_content">
              <h2>404</h2>
              <h4>Page Not Found</h4>
              <img class="img-fluid" src="{{asset('front/img/error_img.png')}}">
              <a href="{{route('index')}}" class="btn btn-error">GO BACK</a>
          </div>
        </div>
        </div>
      </div>       
     </section>
     @stop