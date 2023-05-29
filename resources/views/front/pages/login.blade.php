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
                    <p><small>Welcome back</small></p>
                    <h2>Login to your account</h2>
                    <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))

                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                        @endforeach
                    </div> <!-- end .flash-message -->
                    <form id="form-login" role="form" action="{{ route('customer') }}" method="post">
                        @csrf
                        <div class="mt-4">
                            <div class="position-relative relative-label">
                                <label>Email Id</label>
                                <input type="email" id="email" class="form-control input @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" placeholder="Email ID" autocomplete="email" autofocus>
                                <span id="emails" style="color:red;"></span> 
                                @error('email')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-4">
                            <div class="position-relative relative-label">
                                <label>Password</label>
                                <input type="password" id="password" class="form-control input @error('password') is-invalid @enderror" placeholder="Password" name="password" autocomplete="current-password">
                                <span id="passwords" style="color:red;"></span>
                                @error('password')
                                    <span class="invalid-feedback text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                </div>
                            <div class="mt-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- <div>
                                <label class="m-0 remember-me"><input type="checkbox"><span class="ml-1">Remember me</span></label>
                                        </div> -->
                                    <a href="{{route('forgot-password')}}" class="forgot-password">Forgot Password?</a>
                                    </div>
                            </div>
                            <div class="mt-3">
                                <button type="button" class="login-btn" value="LOGIN" id="login" >LOGIN</button>
                            </div>
                            <!-- <div class="mt-3">
                                <button type="button" class="google-login"><img src="{{asset('front/img/google.png')}}"><span class="ml-2">Or sign-in with google</span></button>
                            </div> -->
                        </div>
                    </form>
                    <div class="mt-5">
                        <a href="{{route('signup')}}" class="create-account"><span>Don`t have an account? </span>Create an Account</a>
                    </div>
                </div>
            </div>
            </div>
       </div>
    </section>

@stop
