@extends('front.layouts.master') @section('content') <section id="login-dashboard">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-5 align-self-center">
        <div class="inner-image">
          <img src="{{asset('front/img/login.png')}}" class="w-100">
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-5 align-self-center">
        <div class="form-login">
          <h2>Create an Account</h2>
          <form>
            <div class="mt-4">
              <div class="position-relative relative-label">
                <label>Name</label>
                <input type="text" class="form-control input" placeholder="Name" name="name" id="name" value="{{old('name')}}">
                <span id="names" style="color:red;"></span>
              </div>
              <div class="mt-4">
                <div class="position-relative relative-label">
                  <label>Email</label>
                  <input type="email" class="form-control input" name="email" placeholder="Email" id="email" value="{{old('email')}}">
                  <span id="emails" style="color:red;"></span>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                  <div class="position-relative relative-label">
                    <label>Password</label>
                    <input type="password" class="form-control input" placeholder="Password" id="password">
                    <span id="passwords" style="color:red;"></span>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                  <div class="position-relative relative-label">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control input" placeholder="Confirm Password" id="password_confirmation">
                    <span id="cpasswords" style="color:red;"></span>
                  </div>
                </div>
              </div>
              <div class="mt-4">
                <div class="position-relative relative-label">
                  <label>Mobile Number</label>
                  <input type="tel" class="form-control input" placeholder="Mobile Number" name="mobile_number" id="mobile_number" value="{{old('mobile_number')}}" maxlength="10">
                  <span id="mobile_numbers" style="color:red;"></span>
                </div>
              </div>
              <div class="mt-4">
                <div class="position-relative relative-label">
                  <label>Refferal Code</label>
                  <input type="tel" class="form-control input" placeholder="refferal_code" name="refferal_code" id="refferal_code" value="{{$code}}" maxlength="6">                  
                </div>
              </div>
              <div class="mt-3">
                <input type="submit" value="CREATE ACCOUNT" id="registration">
              </div>
              <div class="mt-3">
                <a href="{{route('customerLogin')}}" type="button" class="google-login">
                  <span>
                    <small>Already have account?</small>
                  </span>
                  <span class="ml-2">Login Here</span>
                </a>
              </div>
            </div>
          </form>
          <div class="mt-5">
            <p class="privacy-links">By clicking "Create account" you agree to our <br>
              <a href="#">Terms of Use</a> &amp; <a href="{{route('privacy-policy')}}" target="_blank">Privacy Policy</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> @stop <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>