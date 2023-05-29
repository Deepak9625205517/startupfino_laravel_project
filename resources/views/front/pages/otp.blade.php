@extends('front.layouts.master')
@section('content')

<section id="login-dashboard">
        <div class="container">
        <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-5 align-self-center">
                <div class="inner-image">
                        <img src="{{asset('front/img/login.png')}}" class="w-100">
                    </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-5 align-self-center">
                <div class="form-login">
                    
                    <h2>Forgot Password?</h2>
                    <p><small>We have send an otp on your registered email id</small></p>
                    <form>
                        <div class="mt-4">
                            <div class="position-relative relative-label">
                                <label>Enter Your 4 Digit OTP</label>
                                <input type="text" class="form-control input" placeholder="Enter OTP">
                            </div>
                            <div class="mt-3">
                               <div class="d-flex justify-content-between align-items-center">
                                    <p><small>Did`nt recieve any OTP?</small></p>
                                   <button type="button" class="resend-otp">Resend OTP</button>
                                </div>
                            </div>
                            
                            
                            <div class="mt-3">
                                <input type="submit" value="SUBMIT OTP">
                            </div>
                            
                        </div>
                    </form>
                    
                </div>
            </div>
            </div>
       </div>
    </section>

@stop