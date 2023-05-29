@extends('front.layouts.master')
@section('content')
<section id="blog-details-top" >
         <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <h2>BLOGS</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing<br>
                     and typesetting industry.
                  </p>
               </div>
            </div>
         </div>
      </section>
      <section id="blog-details">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="auther-details">
                     <img  src="{{asset('front/img/blog-auther.png')}}" alt="">
                     <h4>Prabhash Mishra</h4>
                     <p class="post-date">December 05, 2021</p>
                     <p>3 min read</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="blog-contents">
                     <img class="img-fluid" src="{{asset('front/img/blog-details-img.png')}}" alt="">
                     <div class="blog-text">
                        <h3>Automated Google Search Ads Autopilot</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum been the industry's standard dummy text ever since the 1500s, when an unknown printegalley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                        <p>remaining essentially unchanged. It was popularised in the 1960s with the release of Letrsheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <div class="blog-no-list">
                           <ol class="blog-list" start="01">
                              <li>Listen to what they say about you</li>
                              <li>Randomised words which don't look even slightly believable.</li>
                              <li>Lorem Ipsum generators on the Internet tend to repeat predefined chunks</li>
                              <li>Automate multiple scenarios and eliminate tedious tasks.</li>
                           </ol>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum been the industry's standard dummy text ever since the 1500s, when an unknown printegalley of type and scrambled it to make a type specimen book.</p>
                     </div>
                     <div class="blog-text">
                        <img class="img-fluid" src="{{asset('front/img/blog-detalis2.png')}}" alt="">
                        <h3>Detailed insights for your social media</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum been the industry's standard dummy text ever since the 1500s, when an unknown printegalley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                        <p>remaining essentially unchanged. It was popularised in the 1960s with the release of Letrsheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <ol class="blog-list" start="01">
                           <li>Listen to what they say about you</li>
                           <li>Randomised words which don't look even slightly believable.</li>
                           <li>Lorem Ipsum generators on the Internet tend to repeat predefined chunks</li>
                           <li>Automate multiple scenarios and eliminate tedious tasks.</li>
                        </ol>
                        <p>When an unknown printegalley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                     </div>
                     <div class="blog-quote">
                        <div class="blog-quote-content">
                           <img src="{{asset('front/img/blog-qoute-icon.png')}}" alt="">
                           <h5> <span>W</span>hen an unknown printegalley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</h5>
                        </div>
                     </div>
                     <div class="blog-bt-content">
                        <h4>What technology stack do we use at Technology?</h4>
                        <p>It was popularised in the 1960s with the release of Letrsheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     </div>
                     <div class="blog-botton">
                        <div class="blog-btn-social">
                           <div class="blog-btm-bn">
                              <button type="button" class="btn btn   btn-blog">Analyze</button>
                              <button type="button" class="btn btn   btn-blog">Marketing</button>
                           </div>
                           <div class="blog-social-icon">
                              <a href="#!"><img src="{{asset('front/img/Insta.png')}}" alt=""></a>
                              <a href="#!"><img src="{{asset('front/img/Fb.png')}}" alt=""></a>
                              <a href="#!"><img src="{{asset('front/img/Twiter.png')}}" alt=""></a>
                              <a href="#!"><img src="{{asset('front/img/Pintrest.png')}}" alt=""></a>
                           </div>
                        </div>
                        <div class="blog-detail-box">
                           <div class="b-user-details">
                              <img class="img-fluid userimg" src="{{asset('front/img/blog-user-Photo.png')}}" alt="">
                              <div class="user-d">
                                 <h3>Prabhash Mishra</h3>
                                 <p>UIUX Designer</p>
                                 <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the standard dummy.</p>
                                 <div class="blog-user-si">
                                    <a href="#!"><img src="{{asset('front/img/blog-Insta.svg')}}" alt=""></a>
                                    <a href="#!"><img src="{{asset('front/img/blog-Fb.svg')}}" alt=""></a>
                                    <a href="#!"><img src="{{asset('front/img/blog-Twiter.svg')}}" alt=""></a>
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
      <!--Show pop up on page leave-->
@stop