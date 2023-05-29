@extends('front.layouts.master') @section('content')

<!-- <section id="thanku" class="mt-5">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 text-center">

                    <div class="thank-inner">

                       

                        <h2 class="title-bold mt-5">404</h2>

                        <p class="subheading">Page you`re looking for is not found</p>

                        <a href="{{route('index')}}" class="success-download">Go to Home</a>

                    </div>

                </div>

            </div>

           </div>

       </section> -->

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

