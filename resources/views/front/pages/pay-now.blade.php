@extends('front.layouts.master_checkout') @section('content') 
    @php 
         $name   = (isset($enquiry->name) && !empty($enquiry->name))?$enquiry->name:"";
         $email  = (isset($enquiry->email) && !empty($enquiry->email))?$enquiry->email:"";
         $mobile = (isset($enquiry->mobile) && !empty($enquiry->mobile))?$enquiry->mobile:"";
    @endphp

<section id="new-checkout">
         <div class="container">
            <h1>Business Subscription Downloads</h1>
            <div class="new-checkout-card">
               <div class="row">
               
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                     <div class="checkout-inner-left">
                        <h3>Subscription Plan </h3>
                        <form action="{{url('payment')}}" method="get">
                           @csrf
                           @error('subscription_type')
                                    <div style="color:red;">{{ $message }}</div>
                                 @enderror
                        <div class="standard-plan">
                           <div class="form-check-inline">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input radioBtnClass" name="subscription_type" value="{{$fee}}" checked> {{$subscription->type}}
                              </label>
                           </div>
                           <p><img src="{{asset('front/img/red-tick.png')}}" class="img-fluid mr-1" width="14px">
                           ₹{{$fee}}
                           </p>
                        </div>
                        
                        <!-- <div class="standard-plan">
                           <div class="form-check-inline">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input radioBtnClass" name="subscription_type" value="{{$subscription->monthly}}"> Monthly
                              </label>
                           </div>
                           <p><img src="{{asset('front/img/red-tick.png')}}" class="img-fluid mr-1" width="14px">
                           ₹{{$subscription->monthly}}
                           </p>
                        </div> -->

                        <ul>
                          {!! $subscription->description !!}
                        </ul>
                        <div class="change-plan">
                           <p>If you want to change your plan.</p>
                           <a href="{{route('subscription')}}">Change Plan</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                     <div class="checkout-inner-right">
                        <h3>Payment Information</h3>
                        
                        <input type="hidden" id="sub_id" name="sub_id" value="{{$subid}}">
                        <input type="hidden" id="sub_id" name="password" value="{{$pass}}">
                           <div class="row">
                              <div class="position-relative">
                              @error('name')
                                    <div style="color:red;">{{ $message }}</div>
                                 @enderror
                                <span id="first_names" style="color:red;"></span>
                                 <input type="text" class="form-control" placeholder="Name" id="name" name="name" value="@if(!empty(Auth::user()->name)){{rtrim(Auth::user()->name)}}@else{{old('name', $name)}}@endif">
                                 
                                 <label class="first">Name</label>
                              </div>
                              <div class="position-relative">
                              @error('mobile_number')
                                    <div style="color:red;">{{ $message }}</div>
                                 @enderror
                                <span id="mobile_numbers" style="color:red;"></span>
                                 <input type="tel" class="form-control" placeholder="Phone Number" name="mobile_number" id="mobile_number" value="@if(!empty(Auth::user()->mobile_number)){{rtrim(Auth::user()->mobile_number)}}@else{{old('mobile_number', rtrim($mobile))}}@endif">
                                 <label class="first">Phone Number</label>
                                 
                              </div>
                           </div>
                           <div class="position-relative">
                           @error('email')
                                    <div style="color:red;">{{ $message }}</div>
                                 @enderror
                             <span id="emails" style="color:red;"></span>
                              <input type="text" class="form-control" placeholder="Email ID" name="email" id="email" value="@if(!empty(Auth::user()->email)){{rtrim(Auth::user()->email)}}@else{{old('email', $email)}}@endif">
                              <label class="second">Email Address</label>
                              
                           </div>
                           
                          
                           <div class="position-relative">
                           <!-- @error('state_id')
                                    <div style="color:red;">{{ $message }}</div>
                                 @enderror -->
                             <span id="state_ids" style="color:red;"></span>
                             <input type="hidden" name="state_id" id="state_id" value="32">
                             <!-- <select name="state_id" class="form-control form-select" id="state_id">
                                <option value=""> Please Select Your State </option>
                                @foreach($states as $state)
                                <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                              </select>
                              <label class="second">Select State</label> -->
                                 
                           </div>
                        
                        <input type="checkbox" class="form-check-input" id="term" name="agree" value='yes' checked> 
                        <p>I have read and agree to the website <a href="#" target="_blank">terms and conditions *</a></p>
                        <span id="checke" style="color:red;"></span>
                        @error('agree')
                                    <div style="color:red;">{{ $message }}</div>
                                 @enderror
                        <input type="submit" name="submit" class="btn pay-btn" value="Pay Now">  

                        </form>
                        <div class="payment-icons">
                           <img src="{{asset('front/img/norton-icon.png')}}" class="img-fluid" width="76px">
                           <div>
                              <img src="{{asset('front/img/payment-icon1.png')}}" class="img-fluid" width="34px">
                              <img src="{{asset('front/img/payment-icon2.png')}}" class="img-fluid" width="34px">
                              <img src="{{asset('front/img/payment-icon3.png')}}" class="img-fluid" width="34px">
                              <img src="{{asset('front/img/payment-icon4.png')}}" class="img-fluid" width="34px">
                              <img src="{{asset('front/img/payment-icon5.png')}}" class="img-fluid" width="34px">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection


