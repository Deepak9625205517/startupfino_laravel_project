@extends('front.layouts.master')

@section('content')



<section id="about-us-top">

         <div class="container">

            <div class="row">

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               
               {!! $record->description !!}

               </div>

            </div>

         </div>

      </section>

      <section id="about-us" class="mt-4" >

         <div class="container">

            <div class="row">

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                  <img class="img-fluid" src="{{asset('front/img/aboutimg.jpg')}}" alt="">

                  <div class="row about-m-img">

                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                        <div class="ab-user" >

                        {!! getDataHomePage('about_us_sticky_note_one') !!}

                        </div>

                     </div>

                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                        <img class="img-fluid ab-sub-img" src="{{asset('front/img/aboutimg2.jpg')}}" alt="">

                     </div>

                  </div>

               </div>

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                  <div class="ab-content">

                  {!! $record->short_description !!}

                     <div class="about-tech">

                        <img class="img-fluid" src="{{asset('front/img/abouticon1.png')}}" alt="">

                        <div class="list">

                        {!! getDataHomePage('about_us_sticky_note_two') !!}

                        </div>

                     </div>

                     <div class="about-tech">

                        <img class="img-fluid" src="{{asset('front/img/abouticon2.png')}}" alt="">

                        <div class="list">

                        {!! getDataHomePage('about_us_sticky_note_three') !!}

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </section>

      <section id="our-invester">

         <div class="container">

            <div class="top-title">

               <h2>Our Story</h2>

            </div>

            <div class="row">

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                  <div class="client">

                  {!! getDataHomePage('about_us_our_history') !!}

                  </div>

               </div>

            </div>

         </div>

      </section>

      <section class="fun-fact pt-5 pd-5">

         <div class="container">

            <div class="row justify-content-center text-center">

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pd-5">

               {!! getDataHomePage('counter_heading') !!}

               </div>

               <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">

                  <div class="year">

                     <span id="count1" class="d-inline  f1" ></span>

                     <h2 class="d-inline f1">+</h2>

                     <p>{!! getDataHomePage('counter_one_heading') !!}</p>

                  </div>

               </div>

               <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">

                  <div class="customer">

                     <span id="count2" class="d-inline f1"></span>

                     <h2 class="d-inline f1">+</h2>

                     <p>{!! getDataHomePage('counter_two_heading') !!}</p>

                  </div>

               </div>

               <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">

                  <div class="readers">

                     <span id="count3" class="d-inline f1"></span>

                     <h2 class="d-inline f1">+</h2>

                     <p>{!! getDataHomePage('counter_three_heading') !!}</p>

                  </div>

               </div>

               <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">

                  <div class="socialf">

                     <span id="count4" class="d-inline f1"></span>

                     <h2 class="d-inline f1">+</h2>

                     <p>{!! getDataHomePage('counter_four_heading') !!}</p>

                  </div>

               </div>

            </div>

         </div>

      </section>

      <section id="ab-missin" class="mt-2 mb-5">

         <div class="container">

            <div class="row">

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">

               {!! $record->long_description !!}

                  <div class="d-flex mb-3">

                     <div class="d-flex flex-column">

                        <div class="p-2 herolp"> <img src="{{asset('front/img/okvector.png')}}" class="me-2" alt=""> {!! getDataHomePage('our_mission_one') !!}</div>

                        <div class="p-2 herolp"><img src="{{asset('front/img/okvector.png')}}" class="me-2" alt=""> {!! getDataHomePage('our_mission_two') !!}</div>

                        <div class="p-2 herolp"><img src="{{asset('front/img/okvector.png')}}" class="me-2" alt="">	{!! getDataHomePage('our_mission_three') !!}</div>

                     </div>

                  </div>

               </div>

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">

                  <div class="about-miss-img gap-2">

                     <img class="img-fluid img-rad" src="{{asset('front/img/about-m1.jpg')}}" alt="">

                     <img class="img-fluid img-rad" src="{{asset('front/img/about-m2.jpg')}}" alt="">

                  </div>

               </div>

            </div>

         </div>

      </section>

      @include('front.layouts.business-box-corpbiz')

      <section id="our-team">

          

                <div class="teamlist">

                  <div class="top-title">

                  {!! getDataHomePage('our_team_description') !!}

                   </div>

             

              <div>


              </div>

                  

              

            </div>

            </div>

            <div class="row team">

               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

                  <div class="about-res">

                     <img class="img-fluid" src="{{asset('front/img/Narendra Kumar.jpg')}}" alt="">

                  <div class="team-name">

                     <h2>Narendra Kumar</h2>

                     <p>Co-Founder of Bizkit</p>

                  </div>

                  </div>

               </div>

               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

                  <div class="about-res">

                  <img class="img-fluid" src="{{asset('front/img/Abhishek Kumar.jpg')}}" alt="">

                  <div class="team-name">

                     <h2>Abhishek Kumar</h2>

                     <p>Director of Sales</p>

                  </div>

                  </div>

               </div>

               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

                  <div class="about-res">

                  <img class="img-fluid" src="{{asset('front/img/Dileep Gupta.jpg')}}" alt="">

                  <div class="team-name">

                     <h2>Dileep Gupta</h2>

                     <p>Director of Technologies</p>

                  </div>

                  </div>

               </div>

            </div>

         </div>

      </section>

      



@endsection
<script>
    
         
         
    document.addEventListener("DOMContentLoaded", () => {
            function counter(id, start, end, duration) {
              let obj = document.getElementById(id),
              current = start,
              range = end - start,
              increment = end > start ? 1 : -1,
              step = Math.abs(Math.floor(duration / range)),
              timer = setInterval(() => {
                current += increment;
                obj.textContent = current;
                if (current == end) {
                clearInterval(timer);
                }
              }, step);
            }
            counter("count1", 19500, {!! getDataHomePage('counter_one') !!}, 2500);
            counter("count2", 15, {!! getDataHomePage('counter_two') !!}, 1);
            counter("count3", 250, {!! getDataHomePage('counter_three') !!}, 10);
            counter("count4", 10, {!! getDataHomePage('counter_four') !!}, 1);
            
            });
        
        
</script>