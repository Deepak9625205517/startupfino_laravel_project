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
                    
                    <h2>Change Your Password</h2>
                   
                    <form>
                        <div class="mt-4">
                            <div class="position-relative relative-label">
                                <input type="hidden" name="email" id="email" value="{{$email}}">
                                <label>Enter New Password</label>
                                <input type="password" class="form-control input" id="password" placeholder="Enter New Password">
                                <span id="passwords" style="color:red;"></span>
                            </div>
                            <div class="position-relative mt-3 relative-label">
                                <label>Confirm New Password</label>
                                <input type="password" class="form-control input"  id="password_confirmation" placeholder="Confirm New Password">
                                <span id="cpasswords" style="color:red;"></span>
                            </div>
                            
                            <div class="mt-3">
                            <input type="button" class="send-otp" id="reset-password" value="Change Password">
                            </div>
                            
                        </div>
                    </form>
                    
                </div>
            </div>
            </div>
       </div>
    </section>

@stop