@extends('account.layouts.master')
@section('content')

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="acc_user_d">
              <div class="tab-content" id="v-pills-tabContent">
                <!-- Personal information tab start here -->
                <div class="tab-pane fade show active" id="v-pills-personal-information" role="tabpanel"
                  aria-labelledby="v-pills-personal-information-tab">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mx-auto">
                    <div class="licence_box">
                      <div>
                        <h2>Renew your plan today and get up to a 20% discount!</h2>
                        <p>We are determined to deliver the best documentation experience due to awesome customers like you. Renew your plan and check what's in store for you.</p>
                      </div>

                    </div>

                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mx-auto">


                    <div class="row g-3">
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <!-- <p>License key</p> -->
                        <p>Users</p>
                        <p>Renewal date</p>
                        <p>Renewal amount</p>

                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <!-- <p>SP3HK-1SR1X-CCWXP</p> -->
                        <p>1</p>
                        <p>{{ !empty($subscription_detail->last_date) ? \Carbon\Carbon::parse($subscription_detail->last_date)->format('d-F-Y') : '00-00-00'}}</p>
                        <p>₹{{!empty($subscription_detail->price)?$subscription_detail->price : '00.00'}}</p>
                      </div>
                    </div>
                    <div>
                    </div>


                    
                  </div>
                </div>
                <!-- Personal information tab end here -->
        
              </div>
            </div>
          </div>

@endsection