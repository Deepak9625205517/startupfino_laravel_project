@extends('account.layouts.master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="acc_user_d">
              <div class="tab-content" id="v-pills-tabContent">
                <!-- Personal information tab start here -->
                <div class="tab-pane fade show active" id="v-pills-personal-information" role="tabpanel"
                  aria-labelledby="v-pills-personal-information-tab">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mx-auto">
                    <form class="mt-3" action="{{url('profiles')}}" method="post">
                        @csrf
                        <input type="hidden" name="name" value="{{Auth::user()->name}}">
                        <input type="hidden" name="email" value="{{Auth::user()->email}}">
                        <input type="hidden" name="mobile_number" value="{{Auth::user()->mobile_number}}">
                      <div class="row g-3 mt-2">
                        <h6>Business Information</h6>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label for="company_name" class="form-label">Company name</label>
                          <input type="text" class="form-control" id="company_name" name="company_name" value="{{old('company_name', Auth::user()->company_name)}}" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label for="company_contact_number" class="form-label">Company Contact Number</label>
                          <input type="number" class="form-control" id="company_contact_number" name="company_contact_number" value="{{old('company_contact_number', Auth::user()->company_contact_number)}}" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label for="company_contact_email" class="form-label">Company Email address</label>
                          <input type="email" class="form-control" id="company_contact_email" name="company_contact_email" value="{{old('company_contact_email', Auth::user()->company_contact_email)}}" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label for="website_url" class="form-label">Website</label>
                          <input type="text" class="form-control" id="website_url" name="website_url" value="{{old('website_url', Auth::user()->website_url)}}" />
                        </div>
                      </div>
                      <div class="row g-3 mt-4">
                        <h6>Address</h6>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label for="address1" class="form-label">Address line #1</label>
                          <input type="text" class="form-control" id="address1" name="address1" value="{{old('address1', Auth::user()->address1)}}" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label for="address2" class="form-label">Address line #2</label>
                          <input type="tel" class="form-control" id="address2" name="address2" value="{{old('address2', Auth::user()->address2)}}" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label for="inputState" class="form-label">State</label>
                          <select id="inputState" name="state_id" class="form-select">
                            <option value="">Choose...</option>
                            @foreach($records as $record)
                              <option value="{{$record->id}}"{{(Auth::user()->state_id == $record->id) ? 'selected' : ''}}>{{$record->name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                          <label for="city" class="form-label">City</label>
                          <input type="tel" class="form-control" id="city" name="city" value="{{old('city', Auth::user()->city)}}" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                          <label for="postal_code" class="form-label">Postal code</label>
                          <input type="number" class="form-control" id="postal_code" name="postal_code" value="{{old('postal_code', Auth::user()->postal_code)}}" />
                        </div>
                        
                      </div>

                      <div class="row g-3 mt-4">
                        <h6>Business profile</h6>
                        <p class="sub_para">Number of employees</p>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <div class="acc_no_emp">
                            <input type="radio" class="btn-check" name="no_of_employees" id="btnradio1" value="Just Me" autocomplete="off"{{ (Auth::user()->no_of_employees == 'Just Me') ? 'checked' : ''}}>
                            <label class="btn btn-outline-primary" for="btnradio1">Just Me</label>
                            
                            <input type="radio" class="btn-check" name="no_of_employees" id="btnradio2" value="2 - 9" autocomplete="off"{{ (Auth::user()->no_of_employees == '2 - 9') ? 'checked' : ''}}>
                            <label class="btn btn-outline-primary" for="btnradio2">2 - 9</label>
                            
                            <input type="radio" class="btn-check" name="no_of_employees" id="btnradio3" value="10 - 19" autocomplete="off"{{ (Auth::user()->no_of_employees == '10 - 19') ? 'checked' : ''}}>
                            <label class="btn btn-outline-primary" for="btnradio3">10 - 19</label>
                            
                            <input type="radio" class="btn-check" name="no_of_employees" id="btnradio4" value="20 - 49" autocomplete="off"{{ (Auth::user()->no_of_employees == '20 - 49') ? 'checked' : ''}}>
                            <label class="btn btn-outline-primary" for="btnradio4">20 - 49</label>
                            
                            <input type="radio" class="btn-check" name="no_of_employees" id="btnradio5" value="50 - 249" autocomplete="off"{{ (Auth::user()->no_of_employees == '50 - 249') ? 'checked' : ''}}>
                            <label class="btn btn-outline-primary" for="btnradio5">50 - 249</label>
                            
                            <input type="radio" class="btn-check" name="no_of_employees" id="btnradio6" value="250+" autocomplete="off"{{ (Auth::user()->no_of_employees == '250+') ? 'checked' : ''}}>
                            <label class="btn btn-outline-primary" for="btnradio6">250+</label>
                          </div>
                        </div>
                      </div>
                      <div class="row g-3 mt-4">
                        <p class="sub_para">What are your business priorities?</p>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <div class="acc_no_emp">
                            <input type="checkbox" class="btn-check" id="btncheck1" name="business_priority[]" value="Start a Business" autocomplete="off" {{in_array("Start a Business", $data) ? "checked" : ''}}>
                            <label class="btn btn-outline-primary" for="btncheck1">Start a Business</label>
                            
                            <input type="checkbox" class="btn-check" id="btncheck2" name="business_priority[]" value="Grow a Business" autocomplete="off" {{in_array('Grow a Business', $data) ? "checked" : ''}}>
                            <label class="btn btn-outline-primary" for="btncheck2">Grow a Business</label>
                            
                            <input type="checkbox" class="btn-check" id="btncheck3" name="business_priority[]" value="Automate a business" autocomplete="off" {{in_array('Automate a business', $data) ? "checked" : ''}}>
                            <label class="btn btn-outline-primary" for="btncheck3">Automate a business</label>

                            <input type="checkbox" class="btn-check" id="btncheck4" name="business_priority[]" value="Raise Financing" autocomplete="off" {{in_array('Raise Financing', $data) ? "checked" : ''}}>
                            <label class="btn btn-outline-primary" for="btncheck4">Raise Financing</label>
                            
                            <input type="checkbox" class="btn-check" id="btncheck5" name="business_priority[]" value="Hire Employees" autocomplete="off" {{in_array('Hire Employees', $data) ? "checked" : ''}}>
                            <label class="btn btn-outline-primary" for="btncheck5">Hire Employees</label>
                            
                            <input type="checkbox" class="btn-check" id="btncheck6" name="business_priority[]" value="Build New Products" autocomplete="off" {{in_array('Build New Products', $data) ? "checked" : ''}}>
                            <label class="btn btn-outline-primary" for="btncheck6">Build New Products</label>
                            
                            <input type="checkbox" class="btn-check" id="btncheck7" name="business_priority[]" value="Other" autocomplete="off" {{in_array('Other', $data) ? "checked" : ''}}>
                            <label class="btn btn-outline-primary" for="btncheck7">Other</label>

                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-grid mt-5">
                      <input type="submit" value="Update" class="btn-lg btn-block btn-update">
                      </div>
                    </form>
                    <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-grid mt-3">
                      <button class="btn btnlink" type="button" class="btn-lg btn-block">
                        Deactivate company :(
                      </button>
                    </div> -->
                  </div>
                </div>
                <!-- Personal information tab end here -->
          
                <!-- Personal team tab end here -->
             
              </div>
            </div>
          </div>
@endsection          