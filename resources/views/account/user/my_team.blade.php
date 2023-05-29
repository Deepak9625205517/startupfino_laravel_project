@extends('account.layouts.master')

@section('content')

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="acc_user_d">
              <div class="tab-content" id="v-pills-tabContent">
                <!-- Personal information tab start here -->
                <div class="tab-pane fade show active" id="v-pills-personal-information" role="tabpanel"
                  aria-labelledby="v-pills-personal-information-tab">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mx-auto">
                    <div class="teams_user mt-5 pb-1">
                      <div>
                        <img class="log_prof img-fluid" src="img/log-user.png" alt="" />
                      </div>
                      <div>
                      @if($errors->has('email'))
                          <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
                      @endif

                        <h3>{{Auth::user()->name}}</h3>
                        <p>{{Auth::user()->email}}</p>
                      </div>

                      
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center mt-4">
                      <button type="button" onclick="myFunction()" class="btn btn-invite-user">
                        Invite user
                      </button>
                    </div>
                        <div id="changepass_inputs" style="display: none;">
                                <a href="https://web.whatsapp.com/send?phone='{{Auth::user()->mobile_number}}'&text=Hi Sir/Mam,I am {{Auth::user()->name}}. {{url('https://bizkit.in/signup?refferal_code='.Auth::user()->refferal_code)}} This is Refferal Code Pleas Add your account, {{Auth::user()->refferal_code}}" target="_blank"><button type="button" class="btn btn-outline-success"><i class="fa fa-whatsapp"></i></button></a>
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-outline-danger"><i class="fa fa-google-plus"></i></button>
                                
                        </div>
                  </div>
                  
                </div>
                <!-- Personal information tab end here -->
             
                
          
              </div>
            </div>
          </div>

          <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Send Mail</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <form action="{{url('send-mail')}}" method="post">
          @csrf
          <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
          </div><br>
          <div class="form-group">
             <button type="submit" class="btn btn-primary">Submit</button>    
           </div>   
         </form>
      </div>

      

    </div>
  </div>
</div>
@endsection
