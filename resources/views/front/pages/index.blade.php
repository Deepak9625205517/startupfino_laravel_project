@extends('front.layouts.master')
@section('content')

<section class="pt-5 mb-5 hero-sec relative">

         <div class="container">

            <div class="row">

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                  <div class="text-center">

                       {!! getDataHomePage('description') !!}

                        <a href="{{route('subscription')}}"><button type="button" class="btn hero-btn mt-3">Get Started 
                           <img src="{{asset('front/img/herogrticon.png')}}" class="img-fluid " alt=""> 
                        </button></a>
                  </div>

               </div>

            </div>

            <div class="row mt-5">

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 mx-auto">

                  <div class="hero-box ">

                     <p class="mt-4">{!! getDataHomePage('laptop_heading') !!}</p>
                     <div  class="baicons">
                     <a href="#!"><img class="msicons" src="{{asset('front/img/Group 1000004260.png')}}" alt=""></a>
                     </div>
                     <div class="container">

                        <div class="row mt-3 mb-3">

                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 secptext">

                              {!! getDataHomePage('laptop_description') !!}

                              <div class="d-flex jcb mb-3">

                                 <div class="d-flex flex-column">

                                    <div class="p-2 herolp"> <img src="{{asset('front/img/Group.png')}}" class="me-2" alt=""> {!! getDataHomePage('laptop_point_one') !!}</div>

                                    <div class="p-2 herolp"><img src="{{asset('front/img/Group.png')}}" class="me-2" alt=""> {!! getDataHomePage('laptop_point_two') !!}</div>

                                    <div class="p-2 herolp"><img src="{{asset('front/img/Group.png')}}" class="me-2" alt=""> {!! getDataHomePage('laptop_point_three') !!}</div>

                                    <div class="p-2 herolp"><img src="{{asset('front/img/Group.png')}}" class="me-2" alt=""> {!! getDataHomePage('laptop_point_four') !!}</div>
                                    

                                 </div>

                                 <div class="d-flex  me-auto flex-column">

                                    <div class="p-2 herolp"><img src="{{asset('front/img/Group.png')}}" class="me-2" alt=""> {!! getDataHomePage('laptop_point_five') !!}</div>
                                    <div class="p-2 herolp"><img src="{{asset('front/img/Group.png')}}" class="me-2" alt=""> {!! getDataHomePage('laptop_point_six') !!}</div>
                                    <div class="p-2 herolp"><img src="{{asset('front/img/Group.png')}}" class="me-2" alt=""> {!! getDataHomePage('laptop_point_seven') !!}</div>
                                    <div class="p-2 herolp"><img src="{{asset('front/img/Group.png')}}" class="me-2" alt=""> {!! getDataHomePage('laptop_point_eight') !!}</div>

                                 </div>

                              </div>

                              <a href="{{route('subscription')}}"><button type="button" class="btn btn btn-buy ">BUY NOW</button></a>

                           </div>

                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">

                              <img src="{{asset('front/img/laptop.png')}}" class="img-fluid d-md-none d-sm-none d-lg-block" alt="">

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </section>

      <section class="org-sec  mb-5 position-static">

         <div class="container">

            <div class="row">

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 orgsec">

               {!! getDataHomePage('slider_heading') !!}

                    @include('front.layouts.company_logo')                  

               </div>

            </div>

         </div>

      </section>

      <section class=" pt-3  toolkit-sec">

         <div class="container">

            <div class="row">

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 toolkit">

               {!! getDataHomePage('toolkit_description') !!}

                  <a href="{{route('subscription')}}"><button type="button" class="btn btn mt-3 mb-2 btn-started">Get Started</button></a>

               </div>

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 position-relative">

                  <div class="toolkitbg d-flex justify-content-center">

                     <div class="toolkitbox">

                        <div class="text-center pb-3">

                        {!! getDataHomePage('sticky_note_heading') !!}

                        </div>

                        <div class="container">

                           <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                 <div class="box d-flex align-items-center p-2">

                                    <img src="{{asset('front/img/document-kit1.png')}}" alt="">

                                    <div class="ms-3">

                                    {!! getDataHomePage('sticky_note_one') !!}

                                    </div>

                                 </div>

                              </div>

                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                 <div class="box d-flex align-items-center  p-2">

                                    <img src="{{asset('front/img/document-kit2.png')}}" alt="">

                                    <div class="ms-3">

                                    {!! getDataHomePage('sticky_note_two') !!}

                                    </div>

                                 </div>

                              </div>

                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                 <div class="box d-flex  align-items-center p-2">

                                    <img src="{{asset('front/img/document-kit3.png')}}" alt="">

                                    <div class="ms-3">

                                    {!! getDataHomePage('sticky_note_three') !!}

                                    </div>

                                 </div>

                              </div>

                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                 <div class="box d-flex align-items-center  p-2">

                                    <img src="{{asset('front/img/document-kit4.png')}}" alt="">

                                    <div class="ms-3">

                                    {!! getDataHomePage('sticky_note_four') !!}

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </section>

<section class="document_section pd-3 mt-5">
   <div class="container">
      <div>
         <span class="text_underline mb-0">
            <h4 class="haeding_news">
            {!! getDataHomePage('template_description') !!}
         </span>
      </div>
      <div
         id="home_templete"
         class="nav nav-pills mb-3"
         id="pills-tab"
         role="tablist"
         >
         <div class="row owl-carousel owl-theme">
         @foreach($latestDocutments as $key => $docutments) 
            <div class="temp owl_custom">
               <div class="nav-item" role="presentation">
                  <button class="nav-link {{($key==0) ? 'active':''}} custom_button_class" id="pills-human-resource-tab" data-bs-toggle="pill" data-bs-target="#home{{$docutments->id}}" type="button" 
                     role="tab"
                     aria-controls="pills-human-resource"
                     aria-selected="true"
                     >
                     {{$docutments->name}}
                  </button>
               </div>
            </div>
            @endforeach   
         </div>
      </div>
      <div class="tab-content" id="pills-tabContent">
      @foreach($latestDocutments as $key => $docutments)
         <div
            class="tab-pane fade show {{($key==0) ? 'active':''}}"
            id="home{{$docutments->id}}"
            role="tabpanel"
            aria-labelledby="pills-human-resource-tab"
            >
            <div class="tab_content">
               <div class="container">
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mt-2">
                        <div class="n-if-not-found d-if-not-found">
                                <img src="{{asset('front/img/folder-icon.svg')}}">
                                 {!! $docutments->description !!}
                                 <a href="{{route('subscription')}}">Download Templates</a>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
                        <div class="row">
                        @foreach($docutments->subcategory as $d)
                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-3">
                              <a href="{{route('templates.subcategory',[$docutments->slug, $d->slug])}}">
                                 <div class="d-list-docs d-flex align-items-center">
                                    <img src="{{asset('front/img/folder-icon.svg')}}" />
                                    <div class="ms-2 d-flex align-items-center">
                                       <h5>{{$d->name}}</h5>
                                       <img
                                          class="icon-end"
                                          src="{{asset('front/img/Group 1000001366.png')}}"
                                          alt=""
                                          />
                                    </div>
                                 </div>
                              </a>
                           </div>
                           @endforeach   
                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-3">
                              <a href="{{route('templates.category',[$docutments->slug])}}">
                                 <div class="d-list-docs d-flex align-items-center">
                                  <img src="{{asset('front/img/folder-icon.svg')}}">
                                    <div class="ms-2 d-flex align-items-center">
                                       <h5>View All</h5>
                                       <img
                                          class="icon-end"
                                          src="{{asset('front/img/Group 1000001366.png')}}"
                                          alt=""
                                          />
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach   
      </div>
   </div>
</section>



      

      <section id="n-package" class="price position-relative mt-5">
         <div class="text-center">
         {!! getDataHomePage('subscription_heading') !!}
         </div>
      </section>

      <section id="n-package" class="pricing-sec">

         <img src="{{asset('front/img/price-shape3.png')}}">

         <div class="container">

            <div class="row">

               @include('front.layouts.subscription')               

            </div>

         </div>

      </section>

      <section class="testmonial-sec  mt-5 mb-5">

         <div class="container pt-2">

            <div class="text-center mt-5">

               <h4 class="title-bold">{!! getDataHomePage('testmonial_heading') !!} </h4>

            </div>

            <div class="row p-5">

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                  <div class="testbg2 p-5">

                     <div class="owl-carousel owl-theme">



                     @include('front.layouts.testimonial')

                        

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </section>

      <section class="work-sec mt-5 mb-5">

         <div class="container">

            <div class="row">

               <div class="col-lg-5">

                  <div class="bg-img p-5">

                  {!! getDataHomePage('policy_description') !!}
                    
                     <div class="we-rec-btn">
                       <a href="{{route('subscription')}}">
                        <button type="button" class="btn btn work-btn mt-5">Get Started Free  </button>
                        </a>
                     </div>

                  </div>

               </div>

               <div class="col-lg-7">

                  <div class="row process">

                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                        <div class="justify-content-start mt-3">

                           <h2>01</h2>

                           {!! getDataHomePage('policy_note_one') !!}

                        </div>

                     </div>

                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                        <div class="justify-content-start mt-3">

                           <h2>02</h2>

                           {!! getDataHomePage('policy_note_two') !!}

                        </div>

                     </div>

                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                        <div class="justify-content-start mt-3">

                           <h2>03</h2>

                           {!! getDataHomePage('policy_note_three') !!}

                        </div>

                     </div>

                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                        <div class="justify-content-start mt-3">

                           <h2>04</h2>

                           {!! getDataHomePage('policy_note_four') !!}

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </section>

      

      @include('front.layouts.business-box-corpbiz') 



      <!-- <section  id="blogres" class="news-sec mt-5 mb-5">

        

        

               <div class="blog-news">

                  <div class="text-left">

                  {!! getDataHomePage('blogs_heading') !!}

                  </div>

            

          

                  <div class="we-rec-btn">

                     <a href="#"><button type="button" class="btn btn mt-3 mb-2 btn-news text-end">See More News</button></a>

                  </div>

        

            </div>

      

         <div class="container mt-5 mb-5">

            <div class="row blog">

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">

              

                  <div class="position-static blog-res">

                    <img class="img-fluid" src="{{asset('front/img/news/Image1.png')}}" alt="" />

                    <div class="news-btn d-flex justify-content-around">

                      <a href="blog-details.html">

                      <button

                        type="button"

                        class="btn btn mt-3 mb-2 btn-news-btn"

                        >

                      Analyze

                      </button></a

                        >

                      <a href="blog-details.html">

                      <button

                        type="button"

                        class="btn btn mt-3 mb-2 btn-news-btn"

                        >

                      Marketing

                      </button></a

                        >

                    </div>

                    <div class="d-flex justify-content-between news-dt">

                      <p>December 05, 2021</p>

                      <p>3 min read</p>

                    </div>

                    <div>

                      <a href="#!">

                        <h3>Detailed insights for your social media</h3>

                      </a>

                      <p>

                        Lorem Ipsum is simply dummy text the printing and

                        typesetting industry. Lorem Ipsum has been the standard

                        dummy.

                      </p>

                      <a type="button" class="btn btn-news-more">View More</a>

                    </div>

                  </div>

               

              </div>

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">

                <div class="position-static blog-res">

                  <img class="img-fluid" src="{{asset('front/img/news/Image2.png')}}" alt="" />

                  <div class="news-btn d-flex justify-content-around">

                    <a href="blog-details.html">

                    <button type="button" class="btn btn mt-3 mb-2 btn-news-btn">

                    Analyze

                    </button></a

                      >

                  </div>

                  <div class="d-flex justify-content-between news-dt">

                    <p>December 05, 2021</p>

                    <p>3 min read</p>

                  </div>

                  <div>

                    <a href="#!">

                      <h3>New Device Invention for Digital Platform</h3>

                    </a>

                    <p>

                      Lorem Ipsum is simply dummy text the printing and typesetting

                      industry. Lorem Ipsum has been the standard dummy.

                    </p>

                    <a type="button" class="btn btn-news-more">View More</a>

                  </div>

                </div>

              </div>

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">

                <div class="position-static blog-res">

                  <img class="img-fluid" src="{{asset('front/img/news/Image3.png')}}" alt="" />

                  <div class="news-btn d-flex justify-content-around">

                    <a href="blog-details.html">

                    <button type="button" class="btn btn mt-3 mb-2 btn-news-btn">

                    Analyze

                    </button></a

                      >

                    <a href="blog-details.html">

                    <button type="button" class="btn btn mt-3 mb-2 btn-news-btn">

                    Marketing

                    </button></a

                      >

                  </div>

                  <div class="d-flex justify-content-between news-dt">

                    <p>December 05, 2021</p>

                    <p>3 min read</p>

                  </div>

                  <div>

                    <a href="#!">

                      <h3>Business Strategy Make His Goal Acheive</h3>

                    </a>

                    <p>

                      Lorem Ipsum is simply dummy text the printing and typesetting

                      industry. Lorem Ipsum has been the standard dummy.

                    </p>

                    <a type="button" class="btn btn-news-more">View More</a>

                  </div>

                </div>

              </div>

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">

                <div class="position-static blog-res">

                  <img class="img-fluid" src="{{asset('front/img/news/Image1.png')}}" alt="" />

                  <div class="news-btn d-flex justify-content-around">

                    <a href="blog-details.html">

                    <button type="button" class="btn btn mt-3 mb-2 btn-news-btn">

                    Analyze

                    </button></a

                      >

                    <a href="blog-details.html">

                    <button type="button" class="btn btn mt-3 mb-2 btn-news-btn">

                    Marketing

                    </button></a

                      >

                  </div>

                  <div class="d-flex justify-content-between news-dt">

                    <p>December 05, 2021</p>

                    <p>3 min read</p>

                  </div>

                  <div>

                    <a href="#!">

                      <h3>Detailed insights for your social media</h3>

                    </a>

                    <p>

                      Lorem Ipsum is simply dummy text the printing and typesetting

                      industry. Lorem Ipsum has been the standard dummy.

                    </p>

                    <a type="button" class="btn btn-news-more">View More</a>

                  </div>

                </div>

              </div>

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">

                <div class="position-static blog-res">

                  <img class="img-fluid" src="{{asset('front/img/news/Image2.png')}}" alt="" />

                  <div class="news-btn d-flex justify-content-around">

                    <a href="blog-details.html">

                    <button type="button" class="btn btn mt-3 mb-2 btn-news-btn">

                    Analyze

                    </button></a

                      >

                  </div>

                  <div class="d-flex justify-content-between news-dt">

                    <p>December 05, 2021</p>

                    <p>3 min read</p>

                  </div>

                  <div>

                    <a href="#!">

                      <h3>New Device Invention for Digital Platform</h3>

                    </a>

                    <p>

                      Lorem Ipsum is simply dummy text the printing and typesetting

                      industry. Lorem Ipsum has been the standard dummy.

                    </p>

                    <a type="button" class="btn btn-news-more">View More</a>

                  </div>

                </div>

              </div>

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">

                <div class="position-static blog-res">

                  <img class="img-fluid" src="{{asset('front/img/news/Image3.png')}}" alt="" />

                  <div class="news-btn d-flex justify-content-around">

                    <a href="blog-details.html">

                    <button type="button" class="btn btn mt-3 mb-2 btn-news-btn">

                    Analyze

                    </button></a

                      >

                    <a href="blog-details.html">

                    <button type="button" class="btn btn mt-3 mb-2 btn-news-btn">

                    Marketing

                    </button></a

                      >

                  </div>

                  <div class="d-flex justify-content-between news-dt">

                    <p>December 05, 2021</p>

                    <p>3 min read</p>

                  </div>

                  <div>

                    <a href="#!">

                      <h3>Business Strategy Make His Goal Acheive</h3>

                    </a>

                    <p>

                      Lorem Ipsum is simply dummy text the printing and typesetting

                      industry. Lorem Ipsum has been the standard dummy.

                    </p>

                    <a type="button" class="btn btn-news-more">View More</a>

                  </div>

                </div>

              </div>

            </div>

          </div>

      </section> -->

      <section class="process-sec mt-5 mb-5">

         <div class="container">

            <div class="process-title">

               

                  <div>

                  {!! getDataHomePage('vedio_heading') !!}

                  </div>

             

            

                 <div>

                   <a href="{{route('subscription')}}"><button type="button" class="btn btn mt-3 mb-2 btn-started">Get Started Now</button></a>

                 </div>

           

            </div>

         </div>

         <div class="container">

            <div class="row">

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                  <div class="working-process pt-5">

                     <div class="d-flex justify-content-start gap-2 pb-2">

                        <div class="p-image ">

                           <img src="{{asset('front/img/Group 1000004550.png')}}" alt="">

                        </div>

                        <div class="ml-2 ">

                        {!! getDataHomePage('vedio_des_one') !!}

                        </div>

                     </div>

                     <div class="d-flex justify-content-start gap-2 pb-2">

                        <div class="p-image">

                           <img src="{{asset('front/img/Group 1000004547.png')}}" alt="">

                        </div>

                        <div class="ml-2 ">

                        {!! getDataHomePage('vedio_des_two') !!}

                        </div>

                     </div>

                     <div class="d-flex justify-content-start gap-2 pb-2">

                        <div class="p-image">

                           <img  src="{{asset('front/img/Group 1000004548.png')}}" alt="">

                        </div>

                        <div class="ml-2">

                        {!! getDataHomePage('vedio_des_three') !!}

                        </div>

                     </div>

                  </div>

               </div>

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                  <a data-bs-toggle="modal" data-bs-target="#exampleModal"><img class="img-fluid" src="{{asset('front/img/Group 1000004549.png')}}" alt=""></a>

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

      <section class="subscribe-sec position-static mb-5">

         <div class="container">

            <div class="subscribe-sec-bgimg">

               <div class="row py-5 p-5">

                  <div class="col-lg-7 mt-3 mb-3">

                  {!! getDataHomePage('newsletter_heading') !!}

                     <div class="mt-4">

                     <span id="email_subscribe" class="text-white"></span> 

                              @error('email')

                                    <span class="invalid-feedback text-white" role="alert">

                                        <strong>{{ $message }}</strong>

                                    </span>

                                @enderror

                        <form class="form-subscribe" action="#">

                           <div class="input-group">

                              <input type="email" class="form-control input-lg" name="email" id="email_id" placeholder="Enter Your Email ID">

                              <span class="input-group-btn">

                              <button class="btn btn-success" type="submit" id="subscribes">Start</button>

                              </span>

                              

                           </div>

                           

                        </form>

                     </div>

                     <div class="d-flex d-inline gap-4 sub-img">

                        <div class="mt-4">

                           <img class="d-inline" src="{{asset('front/img/Group 16.svg')}}" alt="">

                           <p class="d-inline">{!! getDataHomePage('newsletter_offer') !!}</p>

                        </div>

                        <div class="mt-4">

                           <img class="d-inline" src="{{asset('front/img/Group 16.svg')}}" alt="">

                           <p class="d-inline">{!! getDataHomePage('newsletter_tips') !!}</p>

                        </div>

                        <div class="mt-4">

                           <img class="d-inline" src="{{asset('front/img/Group 16.svg')}}" alt="">

                           <p class="d-inline">{!! getDataHomePage('newsletter_update') !!}</p>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-5">

                     <img class="img-fluid sub-group-img" src="{{asset('front/img/sub-group-img.png')}}" alt="">

                  </div>

               </div>

            </div>

         </div>

      </section>

      <!-- Modal -->
 <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <iframe
              width="100%"
              height="315"
              src="https://www.youtube.com/embed/966g56x3UCg"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
            ></iframe>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>

      <!--Show pop up on page leave-->

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

      