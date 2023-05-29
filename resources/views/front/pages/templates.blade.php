@extends('front.layouts.master') @section('content') 
<section id="temp" class="document_section pd-30">
   <div class="container mb-5 pb-5">
      <div>
         <span class="text_underline mb-0">
         {!! getDataHomePage('template_description') !!}
         </span>
      </div>
      <div
         id="temp-carousel"
         class="nav nav-pills mb-3"
         id="pills-tab"
         role="tablist"
         >
         <div class="row owl-carousel owl-theme">
         @foreach($categories as $key => $category)
            <div class="item owl_custom">
               <div class="nav-item" role="presentation">
                  <button class="nav-link {{($key==0) ? 'active':''}} custom_button_class" id="pills-human-resource-tab" data-bs-toggle="pill" data-bs-target="#home{{$category->id}}" type="button" 
                     role="tab"
                     aria-controls="pills-human-resource"
                     aria-selected="true"
                     >
                     {{$category->name}}
                  </button>
               </div>
            </div>
            @endforeach   
         </div>
      </div>
      <div class="tab-content" id="pills-tabContent">
      @foreach($categories as $key => $category) 
         <div
            class="tab-pane fade show {{($key==0) ? 'active':''}}"
            id="home{{$category->id}}"
            role="tabpanel"
            aria-labelledby="pills-human-resource-tab"
            >
            <div class="tab_content">
               <div class="container">
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 mt-2">
                        <div class="n-if-not-found d-if-not-found">
                                <img src="{{asset('front/img/folder-icon.svg')}}">
                                 {!! $category->description !!}
                                 <a href="{{route('subscription')}}">Download Templates</a>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                        <div class="row">
                        @foreach($category->subcategory as $subcategory) 
                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-2">
                              <a href="{{route('templates.subcategory', [$category->slug, $subcategory->slug])}}">
                                 <div class="d-list-docs d-flex align-items-center">
                                    <img src="{{asset('front/img/folder-icon.svg')}}" />
                                    <div class="ms-2 d-flex align-items-center">
                                       <h5>{{$subcategory->name}}</h5>
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
                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-2">
                              <a href="{{route('templates.category',[$category->slug])}}">
                                 <div class="d-list-docs d-flex align-items-center">
                                 <img src="{{asset('front/img/folder-icon.svg')}}">
                                    <div class="ml-3 d-flex align-items-center">
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
@stop
