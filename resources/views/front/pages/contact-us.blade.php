@extends('front.layouts.master')

@section('content')



<section id="contact-us">

         <div class="container">

            <div class="row">

               <div class="col-lg-12">

               {!! $record->short_description !!}

                  <div class="top-content gap-5">

                     <p><img src="{{asset('front/img/contact-Mail-icon.svg')}}" alt="">{{ getDataFromSetting('ADMIN-MAIL') }}</p>

                     <p><img src="{{asset('front/img/contact-call-icon.svg')}}" alt="">+{{ getDataFromSetting('mobile') }}</p>

                  </div>

               </div>

            </div>

            <div class="contact-us-card">

               <div class="row">

                  <div class="col-lg-12">

                     <div class="row">

                        <form>

                           <div class="row">

                              <div class="form-group col-md-6">

                                 <label for="inputEmail4">Full name <span>*</span></label><span id="names" style="color:red;"></span>

                                 <input type="text" class="form-control" id="name" placeholder="Enter Your Name">                                 

                              </div>

                              <div class="form-group col-md-6">

                                 <label for="inputEmail4">Your email <span>*</span></label><span id="emails" style="color:red;"></span>

                                 <input type="email" class="form-control" id="email" placeholder="example@yourmail.com">                                 

                              </div>

                           </div>

                           <div class="row">

                              <div class="form-group col-md-6">

                                 <label for="inputEmail4">Phone Number <span>*</span></label><span id="mobile_numbers" style="color:red;"></span>

                                 <input type="tel" class="form-control" id="mobile_number" placeholder="Enter Your Phone Number">                                 

                              </div>

                              <div class="form-group col-md-6">

                                 <label for="inputEmail4">Subject <span>*</span></label><span id="subjects" style="color:red;"></span>

                                 <input type="text" class="form-control" id="subject" placeholder="How can we Help?">                                 

                              </div>

                           </div>

                           <div class="row">

                              <div class="form-group col-md-12">

                                 <label for="inputEmail4">Message<span>*</span></label>

                                 <textarea class="form-control" id="description" placeholder="Please let us know how we can assist you..." id="exampleFormControlTextarea1" rows="3"></textarea>

                              </div>

                           </div>

                           <div id="contact_data">

                             <button type="button" class="btn btn btn-send" id="contactus">Send Message</button>

                           </div>

                        </form>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </section>

      <section id="global">

         <div class="container">

            <div class="row justify-content-center">

               <div class="col-lg-12">

                  <div class="text-center">

                  {!! $record->description !!}

                  </div>

               </div>

            </div>

            <div class="row">

               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">

                  <div class="global-box">

                     <img src="{{asset('front/img/global-usa.png')}}" alt="">

                     {!! getDataHomePage('office_address_one') !!}

                     <div class="main-offer">

                        <button type="button" class="btn btn btn-offer">Main Office</button>

                     </div>

                  </div>

               </div>

               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">

                  <div class="global-box">

                     <img src="{{asset('front/img/global-aus.png')}}" alt="">

                     {!! getDataHomePage('office_address_two') !!}

                  </div>

               </div>

               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mx-auto">

                  <div class="global-box">

                     <img src="{{asset('front/img/global-uk.png')}}" alt="">

                     {!! getDataHomePage('office_address_three') !!}

                  </div>

               </div>

            </div>

         </div>

      </section>

      <section id="faq-sec">

         <div class="container">

            <h2 class="title">Frequently Asked Questions</h2>

            <div class="row">

               <div class="col-lg-12">

                  <div class="faq-list">

                  <div class="accordion accordion-flush" id="accordionFlushExample">
                      @foreach($faqs as $k=>$v) 
                        <div class="accordion-item">

                           <h2 class="accordion-header" id="flush-headingOne">

                              <button class="accordion-button collapsed testing_acordian" type="button" data-bs-toggle="collapse" data-bs-target="#flush-{{$v->id}}" aria-expanded="false" aria-controls="flush-collapseOne">

                              {{$k+1}}. {{$v->questions}}

                              </button>

                           </h2>

                           <div id="flush-{{$v->id}}" class="accordion-collapse collapse {{($k == 0) ? 'show' : ''}}" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">

                              <div class="accordion-body">

                                {!! $v->answer !!} 
                                 
                              </div>

                           </div>

                        </div>
                      @endforeach
                     </div>

                  </div>

               </div>

            </div>

         </div>

      </section>



@stop