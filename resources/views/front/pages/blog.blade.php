@extends('front.layouts.master')
@section('content')

<section id="blogres" class="news-sec  mt-5 mb-5">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="text-center">
              <h4>News & Articles</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipiscing elit interdum
                ullamcorper sed pharetra sene.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-5 mb-5">
        <div class="row blog">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
          
              <div class="position-static blog-res">
                <img class="img-fluid" src="{{asset('front/img/news/Image1.png')}}" alt="" />
                <div class="news-btn d-flex justify-content-around">
                  <a href="{{route('blog-detail')}}">
                  <button
                    type="button"
                    class="btn btn mt-3 mb-2 btn-news-btn"
                    >
                  Analyze
                  </button></a
                    >
                  <a href="{{route('blog-detail')}}">
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
                <a href="{{route('blog-detail')}}">
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
                <a href="{{route('blog-detail')}}">
                <button type="button" class="btn btn mt-3 mb-2 btn-news-btn">
                Analyze
                </button></a
                  >
                <a href="{{route('blog-detail')}}">
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
                <a href="{{route('blog-detail')}}">
                <button type="button" class="btn btn mt-3 mb-2 btn-news-btn">
                Analyze
                </button></a
                  >
                <a href="{{route('blog-detail')}}">
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
                <a href="{{route('blog-detail')}}">
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
                <a href="{{route('blog-detail')}}">
                <button type="button" class="btn btn mt-3 mb-2 btn-news-btn">
                Analyze
                </button></a
                  >
                <a href="{{route('blog-detail')}}">
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
    </section>
    <!--Show pop up on page leave-->

@stop