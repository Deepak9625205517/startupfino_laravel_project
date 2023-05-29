@extends('front.layouts.master') @section('content') 
<section id="n-package" class="price mt-5">
         <div class="text-center">
         {!! getDataHomePage('subscription_heading') !!}
         </div>
      </section>
      <section id="n-package" class="pricing-sec position-relative">
         <img src="{{asset('front/img/price-shape3.png')}}">
         <div class="container">
            <div class="row">
               @include('front.layouts.subscription') 
            </div>
         </div>
      </section>
      <section id="top-documents" class="mt-5 pb-5">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 mt-5 text-center">
               <h2 class="title-bold"> Professionally Drafted Business Documents to Scale up your Business </h2>
                  <p class="subheading">Ready-to-modify Documents Compatible with 15+ Industries.</p>
               </div>
            </div>
            <div class="row">
               
            @foreach($records as $record)   
            
              @if(!empty($record->slug) && !empty($record->category))   
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 mt-3">
                   <a href="{{route('templates.subcategory', [$record->category->slug, ($record->subcategory) ? $record->slug : ''])}}">
                     <div class="download-top-document">
                        <img src="{{asset('front/img/folder-icon.svg')}}">
                        <span>{{$record->name}}</span>
                     </div>
                  </a>
               </div>
                 @endif
            @endforeach   
              
            </div>
         </div>
      </section>
      @include('front.layouts.business-box-corpbiz')

@stop