@extends('front.layouts.master')
@section('content')

    <!-- Menu Bar End -->
      <!-- Whitepaper Banner section start -->
      <section id="whitepaper-section">
         <div class="container">
            <div class="row">
               <div class="whitepaper-banner-text">
               <h2 class="text-center text-white">{!! $record->title !!}</h2>               
               </div>
            </div>
      </div>
   </section>
   <!-- Whitepaper Banner section end -->
   <!-- Refund Policy Content section start -->
   <section id="refund-policy-main">
      <div class="container-fluid">
         <div class="refund-content">
         {!! $record->description !!}
         </div>
      </div>
   </section>

@stop