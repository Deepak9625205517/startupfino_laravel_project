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
                    <form>
                        <div class="mt-4">
                            <div class="position-relative relative-label">
                                <label>Enter Your Email ID</label>
                                <input type="email" id="email" class="form-control input" placeholder="Email ID">
                                <span id="emails" style="color:red;"></span>
                            </div>

                            <div class="mt-3" id="forget">
                                <input type="button" class="send-otp" id="forget-password" value="Reset Password">
                            </div>
                            
                        </div>
                    </form>
                    
                </div>
            </div>
            </div>
       </div>
    </section>

@stop