@extends('account.layouts.master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="acc_user_d">
              <div class="tab-content" id="v-pills-tabContent">
                <!-- Personal information tab start here -->
                <div class="tab-pane fade show active" id="v-pills-personal-information" role="tabpanel"
                  aria-labelledby="v-pills-personal-information-tab">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mx-auto">
                    <div class="acc_pers_info  piusernameicon text-center mt-3 pb-2">
                      <img class="log_prof img-fluid" src="{{asset('front/img/log-user.png')}}" alt="" />
                      <h2>{{Auth::user()->name}}</h2>
                    </div>
                    <form class="row g-3" action="{{url('profiles')}}" method="post">
                      @csrf
                      <h6>Name & contact</h6>
                      
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label for="lastname" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name', Auth::user()->name)}}" />
                        @if($errors->has('name'))
                            <div class="error">{{ $errors->first('name') }}</div>
                        @endif
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{old('email', Auth::user()->email)}}" />
                        @if($errors->has('email'))
                            <div class="error">{{ $errors->first('email') }}</div>
                        @endif
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label for="phonenumber" class="form-label">Phone number</label>
                        <input type="tel" class="form-control" name="mobile_number" id="phonenumber" value="{{old('mobile_number', Auth::user()->mobile_number)}}" />
                        @if($errors->has('mobile_number'))
                            <div class="error">{{ $errors->first('mobile_number') }}</div>
                        @endif
                      </div>
                      <div class="d-flex justify-content-between mt-2">
                        <div>
                          <a href="{{route('profile.index')}}" class="btn btn-link btnlink">
                            Change Password
                          </a>
                        </div>


                        <div>
                          <!-- <button type="button" class="btn btn-link btnlink">
                            reset password by email
                          </button> -->
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-grid mt-3">
                        <input type="submit" value="Update" class="btn-lg btn-block btn-update">
                      </div>
                    </form>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-grid">
                    @if(Auth::user()->is_admin == 2)
                      <button class="btn btnlink" type="button" class="btn-lg btn-block" onclick="deleteUser()">
                        Delete your account :(
                      </button>
                      @endif
                    </div>
                  </div>
                </div>
                <!-- Personal information tab end here -->
              </div>
            </div>
          </div>
@endsection     
  