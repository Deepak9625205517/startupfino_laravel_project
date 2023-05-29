@extends('front.layouts.master') @section('content') 

<section id="templates" class="mt-5">

   <div class="container">

      <div class="row justify-content-center">

         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="nav-tab-template">

               <a href="{{route('templates')}}">Templates</a>

               <!-- <nav class="d-flex justify-content-center">

                  <div class="nav nav-tabs" id="nav-tab" role="tablist">

                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Business Plan Kit</a>

                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Legal Agreements</a>

                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Human Resource</a>

                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Start a Business</a>

                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Sales &amp; Merketing</a>

                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Finance &amp; Accounting</a>

                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Others</a>

                  </div>

                  </nav> -->

            </div>

            <div class="nav-template-inner">

               <div class="tab-content" id="nav-tabContent">

                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                     <div class="template-section">

                        <div class="row">

                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                              <div class="inner-only">

                                 <div class="row">
                              @if($records->count() > 0)
                                @foreach($records as $record)    

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mt-5">

                                       <a href="{{route('templates.document_details', [$record->category->slug, $record->subcategory->slug, $record->slug])}}">

                                          <div class="inner-template-image-one">

                                             <img src="{{asset($record->image)}}">

                                             <h5>{{$record->document_name}}</h5>

                                          </div>

                                       </a>

                                    </div>

                                @endforeach    
                              @else
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mt-5">
                                 <div class="inner-template-image-one">
                                     Records has not been found!
                                 </div>   
                              </div>
                              @endif

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>

                  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>

               </div>

            </div>

         </div>

      </div>

   </div>

</section>

@stop