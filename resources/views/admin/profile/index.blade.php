@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{url('/dashboard')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Update Profile</h2>
  </section>

   <div class="row">
      
      <div class="col-md-12">
      
         <!-- @if ($message = Session::get('fail'))
         <div class="alert alert-danger">
            <p>{{ $message }}</p>
         </div>
         @endif -->
         <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Basic Information</h3>
            </div>
            <div class="box-body">
               <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="name">Name:</label>
                              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" name="name" value="{{old('name', Auth::user()->name)}}">
                                 @error('name')
                                    <div style="color:red;">{{ $message }}</div>
                                 @enderror
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="name">Email:</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" name="email" value="{{old('email', Auth::user()->email)}}" readonly>
                              @error('email')
                                    <div style="color:red;">{{ $message }}</div>
                                 @enderror
                     </div>
                  </div>

                  <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Password:</strong>
                            <input placeholder="Password" class="form-control" name="password" type="password" value="{{old('password')}}">
                            @error('password')
                                    <div style="color:red;">{{ $message }}</div>
                                 @enderror
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Confirm Password:</strong>
                            <input placeholder="Confirm Password" class="form-control" name="confirm-password" type="password" value="{{old('password')}}">
                        </div>
                    </div>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="name">Mobile Number:</label>
                              <input type="number" class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter Your Mobile Number" value="{{old('mobile_number', Auth::user()->mobile_number)}}" readonly>
                              @error('mobile_number')
                                    <div style="color:red;">{{ $message }}</div>
                                 @enderror
                     </div>
                  </div>

                  <div class="box-footer">
                     <button type="submit" name="submit" class="btn btn-primary pull-left">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@stop