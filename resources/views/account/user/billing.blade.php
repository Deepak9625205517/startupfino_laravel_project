@extends('account.layouts.master')
@section('content')

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="acc_user_d">
              <div class="tab-content" id="v-pills-tabContent">
                <!-- Personal information tab start here -->
                <div class="tab-pane fade show active" id="v-pills-personal-information" role="tabpanel"
                  aria-labelledby="v-pills-personal-information-tab">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mx-auto">
                    <div class="billingbg mt-3">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Billing history </button>
                        </li>
                        
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                          <div class="billing_content">
                            <p class="csd mt-3">Thank you for downloading the business documents. I hope your business will reach the pinnacle of accomplishments. If you want to download the invoice, click here- <br><br>
                             @if(CheackSubscriptioinUser())
                              <a href="{{url('download-invoice')}}">Download Invoice</a>
                              @endif
                            </p>
                            <p class="sub_para mt-5">Your billing history gives a glimpse of all invoices issued for your account and also gives you the option to download invoices, as mentioned above. For more information, reach out to us via call or mail.</p>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center mt-4">
                            @if(CheackRenewalAlert())  
                             <a href="#" class="btn btn-car mt-4">
                                RENEWAL PLAN
                             </a>
                            @endif
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Personal information tab end here -->
               
              </div>
            </div>
          </div>
@endsection