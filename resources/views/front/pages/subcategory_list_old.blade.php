@extends('front.layouts.master')

<link href="{{ asset('front/css/template.css') }}" rel="stylesheet" type="text/css" />

@section('content') 

<section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="new_tab" id="temp_mob">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                  <div class="new_template_tab">
                    <div class="owl-carousel owl-theme">
                    @foreach(CategoryList() as $k => $cat)
                      <div class="item">
                        <div class="nav-item">
                          <a href="{{route('templates', [$cat->slug])}}">
                            <button class="nav-link {{($cat->slug==0) ? 'active':''}}" type="button">
                              {{$cat->name}}
                            </button>
                          </a>
                        </div>
                        </div>
                    @endforeach  
                   </div>
                  </div>
                </ul>
            </div>

          <div class="new_tab" id="temp_desk">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
              <div class="new_template_tab">
              @foreach(CategoryList() as $k => $cat)
                <div class="nav-item">
                  <a href="{{route('templates.category', [$cat->slug])}}">
                    <button class="nav-link {{($cat->slug==$categories->slug) ? 'active':''}}" type="button">
                    {{$cat->name}}
                    </button>
                  </a>
                </div>
                @endforeach 
               

              </div>
            </ul>
          </div>

          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-business-plank-it" role="tabpanel"
              aria-labelledby="pills-business-plank-ittab">
              <div class="new_tab_pills">
                <div class="section">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="pills_tab_headline">
                        <h2>{{$categories->name}}</h2>
                        {!! $categories->description !!}
                      </div>

                      <!--------------- Tab Section start here -------------->
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                        <!--------------- Tab Section End here ---------------->
                        <!--------------- List Section Stat Here -------------->
                        <div class="row">
                          @foreach($categories->subcategory as $subactegory)
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                              <a href="{{route('templates.subcategory', [$categories->slug, $subactegory->slug])}}">
                                <div class="folder_sec">
                                  <div class="folder_img">
                                    <img class="img-fluid" src="{{asset('front/img/folder-icon.svg')}}" alt="{{$subactegory->name}}" />
                                  </div>
                                  <div class="folder_content">
                                    <h3>
                                      {{$subactegory->name}}
                                    </h3>
                                  </div>
                                </div>
                              </a>                            
                            </div>
                          @endforeach
                        </div>
                        <!--------------- List Section End Here ---------------->
                        <!------------- Document Section start Here -------------->
                        <div class="row mt-4"> 
                        @foreach($documents as $doc)
                          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                            <a href="{{route('templates.document_details', [$categories->slug, $doc->subcategory->slug, $doc->slug])}}">
                              <div class="doc_main_box">
                                <div>
                                  <img src="{{asset($doc->image)}}" class="new_doc img-responsive" />
                                </div>
                                <div class="doc_name_box doc_name">
                                  <h2>{{$doc->document_name}}</h2>
                                </div>
                              </div>
                            </a>
                          </div>
                        @endforeach


                          

                          
                        </div>
                        <!-------------- Document Section End Here -------------->

                        <!------------- Agreement Section Start Here -------------->
                        <div class="row mt-5 mb-4">
                        @foreach($documents_list as $list) 
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">                           
                            <a href="{{route('templates.document_details', [$categories->slug, $list->subcategory->slug, $list->slug])}}">
                              <div class="new_doc_sec d-flex align-items-center">
                                <div class="new_doc_img">
                                  <img src="{{asset('front/img/folder-icon.svg')}}" />
                                </div>
                                <div class="ml-2 agree_caption">
                                  <h4>
                                    {{$list->document_name}}
                                  </h4>
                                </div>
                              </div>
                            </a>
                          </div>
                          @endforeach  

                        </div>
                        
                        <div class="row mt-5 pb-md-5">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            {!! $categories->short_description !!}
                          </div>
                        </div>
                        
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                        <!-- Sidebar card 1 Start Here  -->
                        <div class="row sticky_top">
                          <!-- Sidebar card 2 Start Here  -->

                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                            
                              {!! $categories->sidebar_description !!}

                            
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
      </div>
    </div>
  </section>

  
  <section class="download_sec border-bottom">
    <div class="container-fluid mt-3">
      <div class="row">
        <div class="col-lg-12">
          
            {!! $categories->long_description !!}
          
        </div>
      </div>
    </div>
  </section>

@stop