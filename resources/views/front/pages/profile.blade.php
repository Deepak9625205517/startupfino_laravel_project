@extends('front.layouts.master')
@section('content')

<section id="user-profile">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 mt-5">
                  <div class="user-profile-title text-center">
                     <div class="user-name">TS</div>
                     <h2 class="title-bold pt-3">Welcome, Tarun Sharma</h2>
                     <div class="pt-3">
                        <p>Your Plan: <button type="button">Premium</button></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="mt-5">
               <hr>
            </div>
         </div>
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5 custom-profile-tab">
                  <ul class="nav nav-pills d-flex justify-content-center mb-3" id="pills-tab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#my-account" role="tab" aria-controls="pills-home" aria-selected="true">My Account</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#business-details" role="tab" aria-controls="pills-contact" aria-selected="false">Business Details</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#my-downloads" role="tab" aria-controls="pills-profile" aria-selected="false">My Downloads</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#my-plan" role="tab" aria-controls="pills-contact" aria-selected="false">My Plan/Billing</a>
                     </li>
                     
                  </ul>
               </div>
            </div>
            <div>
               <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="my-account" role="tabpanel" aria-labelledby="pills-home-tab">
                     <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                           <div class="inner-profile-common mt-5">
                              <h2>Name &amp; contact</h2>
                              <div class="form-my-account">
                                 <form>
                                    <div class="row">
                                       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                          <label>Your Name</label>
                                          <input type="text" class="form-control" placeholder="Your Name">
                                       </div>
                                       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                          <label>Email ID</label>
                                          <input type="email" class="form-control" placeholder="Email ID">
                                       </div>
                                       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                          <label>Phone Number</label>
                                          <input type="text" class="form-control" placeholder="Phone Number">
                                       </div>
                                       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                          <label>Business Website</label>
                                          <input type="text" class="form-control" placeholder="Business Website">
                                       </div>
                                       <div class="d-flex w-100 justify-content-between align-items-center mt-4">
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4"><input type="submit" value="UPDATE"></div>
                                           <button type="button" class="button-change-password">Change Password</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="business-details" role="tabpanel" aria-labelledby="pills-profile-tab">
                     <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                           <div class="inner-profile-common mt-5">
                              <h2>Business Details</h2>
                              <div class="form-my-account">
                                 <form>
                                    <div class="row">
                                       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                          <label>Company Name</label>
                                          <input type="text" class="form-control" placeholder="Company Name">
                                       </div>
                                       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                          <label>Business Contact Number</label>
                                          <input type="email" class="form-control" placeholder="Contact Number">
                                       </div>
                                       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                          <label>Business Email ID</label>
                                          <input type="text" class="form-control" placeholder="Email ID">
                                       </div>
                                       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                          <label>Business Website</label>
                                          <input type="text" class="form-control" placeholder="Business Website">
                                       </div>
                                    </div>
                                    <div class="mt-4">
                                       <h2>Business Address</h2>
                                    </div>
                                    <div class="row">
                                       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                          <label>Address line #1</label>
                                          <input type="text" class="form-control" placeholder="Address line #1">
                                       </div>
                                       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                          <label>City</label>
                                          <input type="text" class="form-control" placeholder="City">
                                       </div>
                                       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                          <label>State</label>
                                          <select name="state" class="form-control"></select>
                                       </div>
                                       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                          <label>City</label>
                                          <select name="state" class="form-control"></select>
                                       </div>
                                       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mt-4"><input type="submit" value="UPDATE"></div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="my-downloads" role="tabpanel" aria-labelledby="pills-contact-tab">
                     <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                           <div class="inner-profile-common mt-5">
                              <h2>My Downloads</h2>
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                    <div class="download-again-inner">
                                       <div class="d-flex">
                                          <img src="{{asset('front/img/document.png')}}">
                                          <div class="ml-3 flex-grow-1">
                                             <h3>Fssai Business Plan</h3>
                                             <div class="d-flex mt-1  document-details-deep align-items-center justify-content-between">
                                                <div>
                                                   <p>File type<br><span><i class="fa fa-file-word-o" aria-hidden="true"></i> Word</span></p>
                                                </div>
                                                <div>
                                                   <p>File size<br><span>100kb</span></p>
                                                </div>
                                                <div>
                                                   <p>Pages<br><span>2</span></p>
                                                </div>
                                             </div>
                                             <button type="button">Download</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                    <div class="download-again-inner">
                                       <div class="d-flex">
                                          <img src="{{asset('front/img/document.png')}}">
                                          <div class="ml-3 flex-grow-1">
                                             <h3>Fssai Business Plan</h3>
                                             <div class="d-flex mt-1  document-details-deep align-items-center justify-content-between">
                                                <div>
                                                   <p>File type<br><span><i class="fa fa-file-word-o" aria-hidden="true"></i> Word</span></p>
                                                </div>
                                                <div>
                                                   <p>File size<br><span>100kb</span></p>
                                                </div>
                                                <div>
                                                   <p>Pages<br><span>2</span></p>
                                                </div>
                                             </div>
                                             <button type="button">Download</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                    <div class="download-again-inner">
                                       <div class="d-flex">
                                          <img src="{{asset('front/img/document.png')}}">
                                          <div class="ml-3 flex-grow-1">
                                             <h3>Fssai Business Plan</h3>
                                             <div class="d-flex mt-1  document-details-deep align-items-center justify-content-between">
                                                <div>
                                                   <p>File type<br><span><i class="fa fa-file-word-o" aria-hidden="true"></i> Word</span></p>
                                                </div>
                                                <div>
                                                   <p>File size<br><span>100kb</span></p>
                                                </div>
                                                <div>
                                                   <p>Pages<br><span>2</span></p>
                                                </div>
                                             </div>
                                             <button type="button">Download</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                    <div class="download-again-inner">
                                       <div class="d-flex">
                                          <img src="{{asset('front/img/document.png')}}">
                                          <div class="ml-3 flex-grow-1">
                                             <h3>Fssai Business Plan</h3>
                                             <div class="d-flex mt-1  document-details-deep align-items-center justify-content-between">
                                                <div>
                                                   <p>File type<br><span><i class="fa fa-file-word-o" aria-hidden="true"></i> Word</span></p>
                                                </div>
                                                <div>
                                                   <p>File size<br><span>100kb</span></p>
                                                </div>
                                                <div>
                                                   <p>Pages<br><span>2</span></p>
                                                </div>
                                             </div>
                                             <button type="button">Download</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                    <div class="download-again-inner">
                                       <div class="d-flex">
                                          <img src="{{asset('front/img/document.png')}}">
                                          <div class="ml-3 flex-grow-1">
                                             <h3>Fssai Business Plan</h3>
                                             <div class="d-flex mt-1  document-details-deep align-items-center justify-content-between">
                                                <div>
                                                   <p>File type<br><span><i class="fa fa-file-word-o" aria-hidden="true"></i> Word</span></p>
                                                </div>
                                                <div>
                                                   <p>File size<br><span>100kb</span></p>
                                                </div>
                                                <div>
                                                   <p>Pages<br><span>2</span></p>
                                                </div>
                                             </div>
                                             <button type="button">Download</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                    <div class="download-again-inner">
                                       <div class="d-flex">
                                          <img src="{{asset('front/img/document.png')}}">
                                          <div class="ml-3 flex-grow-1">
                                             <h3>Fssai Business Plan</h3>
                                             <div class="d-flex mt-1  document-details-deep align-items-center justify-content-between">
                                                <div>
                                                   <p>File type<br><span><i class="fa fa-file-word-o" aria-hidden="true"></i> Word</span></p>
                                                </div>
                                                <div>
                                                   <p>File size<br><span>100kb</span></p>
                                                </div>
                                                <div>
                                                   <p>Pages<br><span>2</span></p>
                                                </div>
                                             </div>
                                             <button type="button">Download</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                    <div class="download-again-inner">
                                       <div class="d-flex">
                                          <img src="{{asset('front/img/document.png')}}">
                                          <div class="ml-3 flex-grow-1">
                                             <h3>Fssai Business Plan</h3>
                                             <div class="d-flex mt-1  document-details-deep align-items-center justify-content-between">
                                                <div>
                                                   <p>File type<br><span><i class="fa fa-file-word-o" aria-hidden="true"></i> Word</span></p>
                                                </div>
                                                <div>
                                                   <p>File size<br><span>100kb</span></p>
                                                </div>
                                                <div>
                                                   <p>Pages<br><span>2</span></p>
                                                </div>
                                             </div>
                                             <button type="button">Download</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                    <div class="download-again-inner">
                                       <div class="d-flex">
                                          <img src="{{asset('front/img/document.png')}}">
                                          <div class="ml-3 flex-grow-1">
                                             <h3>Fssai Business Plan</h3>
                                             <div class="d-flex mt-1  document-details-deep align-items-center justify-content-between">
                                                <div>
                                                   <p>File type<br><span><i class="fa fa-file-word-o" aria-hidden="true"></i> Word</span></p>
                                                </div>
                                                <div>
                                                   <p>File size<br><span>100kb</span></p>
                                                </div>
                                                <div>
                                                   <p>Pages<br><span>2</span></p>
                                                </div>
                                             </div>
                                             <button type="button">Download</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="my-plan" role="tabpanel" aria-labelledby="pills-contact-tab">
                     <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                           <div class="inner-profile-common mt-5">
                              <h2>My Plan</h2>
                              <div class="my-plan-details-inner mt-4">
                                 <div>
                                    <p>Plan Name</p>
                                    <h5>Premium</h5>
                                 </div>
                                 <div>
                                    <p>Price</p>
                                    <h5>₹1200/<span>Per Month</span></h5>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-4">
                                    <div class="n-package-inner bg-white">
                                       <p>Startup Plan</p>
                                       <h2 class="title-bold text-center n-sepreate">Free</h2>
                                       <ul class="list-unstyled">
                                          <li><i class="fa fa-check"></i>Activation</li>
                                          <li><i class="fa fa-check"></i>Anonymous Review</li>
                                          <li><i class="fa fa-check"></i>Documy Widget</li>
                                          <li><i class="fa fa-check"></i>Dashboard Control</li>
                                          <li><i class="fa fa-check"></i>Layer Organized</li>
                                          <li><i class="fa fa-check"></i>Visualization</li>
                                          <li><i class="fa fa-check"></i>Ready Templates</li>
                                       </ul>
                                       <a href="#">Change/Upgrade Plan</a>
                                    </div>
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-4">
                                    <div class="n-package-inner bg-white h-100">
                                       <p>My Invoices</p>
                                       <h2 class="title-bold text-center n-sepreate">Monthly</h2>
                                       <div class="invoice-inner mt-3">
                                          <div>
                                             <h4>Month : <strong>June 2022</strong></h4>
                                             <h5>Payment Status : <strong><span class="text-danger">Unpaid</span></strong></h5>
                                             <h6>Paid on Date : <strong>12 June 2022</strong></h6>
                                          </div>
                                          <button type="button">Download Invoice</button>
                                       </div>
                                       <div class="invoice-inner mt-3">
                                          <div>
                                             <h4>Month : <strong>June 2022</strong></h4>
                                             <h5>Payment Status : <strong><span class="text-success">Paid</span></strong></h5>
                                             <h6>Paid on Date : <strong>12 June 2022</strong></h6>
                                          </div>
                                          <button type="button">Download Invoice</button>
                                       </div>
                                       <div class="invoice-inner mt-3">
                                          <div>
                                             <h4>Month : <strong>June 2022</strong></h4>
                                             <h5>Payment Status : <strong><span class="text-success">Paid</span></strong></h5>
                                             <h6>Paid on Date : <strong>12 June 2022</strong></h6>
                                          </div>
                                          <button type="button">Download Invoice</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- Bussiness Box Corpbiz -->

      <section id="businexx-box-corpbiz" class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10  text-center">
                    <h2 class="title-bold">
                        We Created Business‑in‑a‑Box with You in Mind.
                    </h2>
                    <p class="subheading">Business Owner • Entrepreneur • CEO • VP/Director/Manager • Administrative Assistant
</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mt-5">
                    <div class="inner-box-corpbiz text-center">
                        <div>
                            <img src="{{asset('front/img/docuemnt-templates.png')}}">
                            <h3>3,000+ Documents
Templates</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mt-5">
                    <div class="inner-box-corpbiz text-center">
                        <div>
                            <img src="{{asset('front/img/docuemnt-templates.png')}}">
                            <h3>3,000+ Documents
Templates</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mt-5">
                    <div class="inner-box-corpbiz text-center">
                        <div>
                            <img src="{{asset('front/img/docuemnt-templates.png')}}">
                            <h3>3,000+ Documents
Templates</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mt-5">
                    <div class="inner-box-corpbiz text-center">
                        <div>
                            <img src="{{asset('front/img/docuemnt-templates.png')}}">
                            <h3>3,000+ Documents
Templates</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop