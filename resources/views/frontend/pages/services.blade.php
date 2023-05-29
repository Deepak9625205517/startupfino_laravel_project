@extends('frontend.layouts.master')
@section('content')
<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" style="position:relative; bottom:4px;">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="mainContainer">
							<div class="formPage">
								<div class="login formBlock" id="tab-1">
									<div class="" id="formlogin">
										<form name="frmlogin" id="frmlogin" method="post">
											<p>Login to your account:</p>
											<div class="g-signin2" data-onsuccess="onSignIn"></div>
											<div class="form-group">
												<input type="email" name="uemail" id="uemail" placeholder="Email Address" autocomplete="off">
												<p id="uemailError" class="error validation_message_error"></p>
											</div>
											<div class="form-group">
												<input type="password" name="password" id="password" placeholder="Password">
												<p id="passwordError" class="error validation_message_error"></p>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="forgot_pass terms">
														<h3 style="text-align: left;"><a href="#" class="tabclass" data-tab="tab-3">Forgot Password</a></h3>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group alignRight">
														<button type="button" class="loginbtn" onclick="checkUser('mypop')">Login</button>
													</div>
												</div>
											</div>
											<div class="errorMessage">
												<div class="loginmsg error"></div>
											</div>
											<div class="col-md-12 terms">
												<h3>Create an account? <a href="#" class="tabclass" data-tab="tab-2">Sign Up</a></h3>
											</div>
										</form>
									</div>
									<div class="" id="loginDivotp" style="display: none;">
										<form class="form-horizontal" name="loginfrmverrifyOtppage" id="loginfrmverrifyOtppage" method="post">
											<p>Verify account:</p>
											<div class="form-group">
												<input type="password" name="loginverifyOtp" id="loginverifyOtp" placeholder="OTP" required>
												<p id="loginverifyOtpError" class="error validation_message_error"></p>
											</div>
											<div class="form-group">
												<p id="loginotptimer"></p>
											</div>
											<div class="form-group alignRight">
												<button type="button" class="verifyProfotpbtn" onclick="verificationProfile('loginpop')">Verify OTP</button>
											</div>
											<div class="errorMessageotp validation_message_error"></div>
										</form>
									</div>
									<div class="" id="loginDivotpresent" style="display: none;">
										<p>Verify account:</p>
										<div class="form-group alignRight">
											<button type="button" class="resendOtpBtn" onclick="resendOtp()">Resend Otp</button>
										</div>
										<div class="resendmessageotp validation_message_error"></div>
									</div>
								</div>
								<div class="register formBlock active" id="tab-2">
									<div class="form-row showReg" id="registerDiv">
										<form name="frmRegData" id="frmRegData" method="post">
											<p>Create a account:</p>
											<div class="g-signin2" data-onsuccess="onSignIn"></div>
											<div class="form-group">
												<input type="text" name="company_name" placeholder="Company Name" autocomplete="off">
											</div>
											<div class="form-group">
												<input type="text" name="name" placeholder="Name" autocomplete="off" required>
												<p id="reguserError" class="error validation_message_error"></p>
											</div>
											<div class="form-group">
												<input type="text" name="email" placeholder="Email Address(Username)" autocomplete="off" required>
												<p id="emailError" class="error validation_message_error"></p>
											</div>
											<div class="form-group">
												<input type="text" name="mobile" pattern="[0-9]{10}" maxlength="10" placeholder="Phone Number" required>
												<p id="mobileError" class="error validation_message_error"></p>
											</div>
											<div class="form-group">
												<input type="password" name="password" placeholder="Password" required>
												<p id="regpwError" class="error validation_message_error"></p>
											</div>
											<input type="hidden" name="errortype" value="popup">
											<div class="form-group alignRight">
												<button type="submit" id="regbtn">Sign Up</button>
											</div>
											<div class="errorMessageReg validation_message_error"></div>
											<div class="col-md-12 terms">
												<p>By clicking the 'Sign Up' button, you confirm that you accept our<a href="">Terms of Use</a> and <a href="">Privacy Policy</a> </p>
												<h3>Have an account? <a href="#" class="tabclass" data-tab="tab-1">Sign In</a></h3>
											</div>
										</form>
									</div>

									<div class="form-row hideReg" id="registerDivotp">
										<form class="form-horizontal" name="frmverrifyOtppage" id="frmverrifyOtppage" method="post">
											<p>Create a account:</p>
											<div class="form-group">
												<input type="password" name="verifyOtp" id="verifyOtp" placeholder="OTP" required>
												<p id="verifyOtpError" class="error validation_message_error"></p>
											</div>
											<div class="form-group">
												<p id="otptimer"></p>
											</div>
											<div class="form-group alignRight">
												<button type="button" class="verifyProfotpbtn" onclick="verificationProfile('mypop')">Verify OTP</button>
											</div>
											<div class="errorMessageotp validation_message_error"></div>
										</form>
									</div>
									<div class="form-row hideReg" id="registerDivotpresent">
										<p>Create a account:</p>
										<div class="form-group alignRight">
											<button type="button" class="resendOtpBtn" onclick="resendOtp()">Resend Otp</button>
										</div>
										<div class="resendmessageotp validation_message_error"></div>
									</div>
								</div>
								<div class="register formBlock" id="tab-3">
									<div class="form-row showReg" id="registerDiv">
										<form name="frmResetPwd" id="frmResetPwd" method="post">
											<p>Forgot Password:</p>
											<div class="form-group">
												<input type="email" name="email" placeholder="Email Address(Username)" autocomplete="off" required>
												<p id="emailError" class="message validation_message"></p>
											</div>
											<div class="form-group alignRight">
												<button type="submit" id="Resetbtn">Submit</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<style>
		.showReg {
			display: block;
		}

		.hideReg {
			display: none;
		}
	</style><section id="virtual-cfo" class="mt-n5 mb-5">

<section class="mt-5 mb-5  w-100" style="background-image:url('frontend/assets/banner/css-sprite-combined.png') !important;">
	<div class="container">
		<div class="row justify-content-center mt-2">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="breadcrum">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="http://localhost/">Home</a></li>
							<li class="breadcrumb-item"><a href="http://localhost/">Manage Business</a></li>
							<li class="breadcrumb-item active" aria-current="page">Virtual CFO Services</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>

		<div class="row justify-content-center mt-2">
			<div class="col-lg-7 col-md-7 col-sm-7 col-12">
				<div class="row mt-2 justify-content-center">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<h1 class="text-white">
												<span class="vcfo_heading1">Virtual CFO</span>&nbsp;&nbsp;<span class="vcfo_herading1a">Services</span></h1>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12 internal-banner-text" style="margin-top: 30px;">
						<p class="text-white">Virtual chief financial officers offer businesses financial expertise and strategic guidance on a flexible, affordable basis. Easily avail virtual CFO services from suraj.</p>
					</div>
				</div>
				<div class="row mt-1 justify-content-center">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<ul class="text-white finofontp">
							<li class="mt-1 mb-2"><i class="fa fa-check-circle chatgreen vcfo_li"></i>&nbsp;&nbsp;Access to experienced financial expert without the cost of a full-time CFO</li><li class="mt-1 mb-2"><i class="fa fa-check-circle chatgreen vcfo_li"></i>&nbsp;&nbsp;Improved financial planning and analysis to support decision-making</li><li class="mt-1 mb-2"><i class="fa fa-check-circle chatgreen vcfo_li"></i>&nbsp;&nbsp;Streamlined financial processes and improved cash flow management</li><li class="mt-1 mb-2"><i class="fa fa-check-circle chatgreen vcfo_li"></i>&nbsp;&nbsp;Mitigated financial risks through expert analysis and guidance</li><li class="mt-1 mb-2"><i class="fa fa-check-circle chatgreen vcfo_li"></i>&nbsp;&nbsp;Strategic guidance to help businesses achieve their financial goals and grow.</li>						</ul>
					</div>
				</div>
				<div class="row mt-3 mb-5 justify-content-start">
					<div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-2 mb-2">
						<a href="tel:+91 8810549414" class="btn btn-darkprimary btn-block" id="callus_btn1">Call&nbsp;Us&nbsp;+91 8810549414</a>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-2 mb-5">
						<a href="https://www.youtube.com/watch?v=gcPQZKd9zx4" class="btn btn-default btn-block vcfo_play_font" id="vcfo_cons_video"><i class="fa fa-play-circle vcfo_play_circle"><span class="text-white font-weight-bold" style="font-size:24px;font-family:AvenirLTStd-Roman;"> See How it works</span></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-12 col-12 mt-5 mb-5">
				<div class="çard">
					<div class="form1_bg" id="form1_bg"></div>
					<div class="card-body" id="form1_card">
						<center><h4 class="text-default mt-3 textfinoh" style="color: #18191B;"><strong>Free Consultation By Expert</strong></h4></center>
												<form name="servicefrmDataM" id="servicefrmDataM">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group mt-3">
										<!-- <strong>Name*</strong> -->
										<input type="text" name="name" value="" class="form-control " placeholder="Name*" required>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group">
										<!-- <strong>Mobile Number*</strong> -->
										<input type="text" name="mobile" value="" maxlength="10" class="form-control " placeholder="Mobile*" required>
										<p id="smobileError" class="error validation_message_error"></p>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group">
										<!-- <strong>Email*</strong> -->
										<input type="email" name="email" value="" class="form-control " placeholder="Email*" required>
										<p id="semailError" class="error validation_message_error"></p>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group  mt-1">
										<!-- <strong>State*</strong> -->
										<select class="form-control" name=state_id id=state_id required><option value="">Select State*</option><option value="1">Andaman & Nicobar Islands</option><option value="2">Andhra Pradesh</option><option value="3">Arunachal Pradesh</option><option value="4">Assam</option><option value="5">Bihar</option><option value="7">Chhattisgarh</option><option value="8">Dadra & Nagar Haveli</option><option value="9">Daman & Diu</option><option value="10">Delhi</option><option value="11">Goa</option><option value="12">Gujarat</option><option value="13">Haryana</option><option value="14">Himachal Pradesh</option><option value="15">Jammu & Kashmir</option><option value="16">Jharkhand</option><option value="17">Karnataka</option><option value="18">Kerala</option><option value="19">Lakshadweep</option><option value="20">Madhya Pradesh</option><option value="21">Maharashtra</option><option value="22">Manipur</option><option value="23">Meghalaya</option><option value="24">Mizoram</option><option value="25">Nagaland</option><option value="26">Odisha</option><option value="27">Puducherry</option><option value="28">Punjab</option><option value="29">Rajasthan</option><option value="30">Sikkim</option><option value="31">Tamil Nadu</option><option value="32">Telangana</option><option value="33">Tripura</option><option value="34">Uttar Pradesh</option><option value="35">Uttarakhand</option><option value="36">West Bengal</option></select>									</div>
									<input type="hidden"  name="service_slug" value="virtual-cfo-services"/>
									<input type="hidden"  name="servid" value="85"/>
																		<div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group mt-3">
										<input type="submit" class="btn btn-darkprimary btn-block vcfo_consultation_form" id="servicebtnM" value="Submit" style="border-radius: 20px;">
									</div>


									<!-- <div class="col-lg-12 form-group">
										<p>Need to speak to an expert? <a href="#" data-toggle="modal" data-target="#assistance_modal">Get Free Consultation</a></p>
									</div> -->
								</div>
							</form>
						<!-- <form action="" method="POST">
							<div class="row mt-3">
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<input type="text" name="name" class="form-control" placeholder="Enter Name">
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-lg-3 col-md-3 col-2">
									<div class="form-group">
										<input type="text" name="mob_ex" class="form-control" value="+91" disabled>
									</div>
								</div>
								<div class="col-lg-0 col-md-9 col-9">
									<div class="form-group">
										<input type="text" name="mob" class="form-control" placeholder="Mobile No">
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<input type="emai" name="email" class="form-control" placeholder="Enter Email Id">
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<select name="state" class="form-control">
											<option value="" selected disabled>Choose State</option>
											<option>Bihar</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<input type="submit" name="submit" class="btn btn-darkprimary btn-block btn-lg" id="vcfo_submitbtn1" value="Submit">
									</div>
								</div>
							</div>
						</form> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="mb-5" id="talk_to_an_export" style="background-image: url('/assets/ui/3-Talkimg.svg'); width: 100%; height:auto;z-index: 1;">
		<div class="container">
			<div class="row justify-content-center">
				<center><strong><h1 class="font-weight-bold textfinoh">Talk to an Expert</h1></strong>
				<p class="text-secondary finfonth" style="font-size: 18px;">Speak to a financial expert today to learn how virtual CFO services can help your business succeed.</p>
				</center>
				<div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-5 finofontp">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-sm-7 col-12">
							<div class="row justify-content-center">
								<div class="col-lg-4 col-md-4 col-sm-4 col-6 mb-3">
									<a href="business_incorporation" target="_blank" class="btn btn-chatgreen btn-block btn-lg mb-5 shadow finfonth talk_to_an_export" style="border-radius: 50px;">Registering</a>
									<a href="ipr_trademark" target="_blank" class="btn btn-lightinfo btn-block btn-lg shadow finfonth talk_to_an_export" style="border-radius: 50px;">Protecting</a>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-12 mt-3 mb-3 circle-img">
									<center><img src="{{asset('frontend/assets/ui/5-circle-img.svg')}}" class="mt-n3 circle-img">
									<span id="startup_lookin_for" class="finfonth circle-img" style="position: absolute; margin-top: 30px; margin-left: -149px;z-index: 3;font-size: 24px;"><strong>Startups <br>Looking For</strong></span></center>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-6">
									<a href="accounting_compliance" target="_blank" class="btn btn-darkprimary btn-block btn-lg mb-5 shadowm finfonth talk_to_an_export" style="border-radius: 50px;">Compliances</a>
									<a href="fundraising_services" target="_blank" class="btn btn-lightpink btn-block btn-lg mb-5 shadow finfonth talk_to_an_export" style="border-radius: 50px;">Fundraising</a>
								</div>
							</div>
							<div class="row justify-content-center" style="z-index: 3;">
								<div class="col-lg-4 col-md-4 col-sm-4 col-6">
									<a href="licences" target="_blank" class="btn btn-warning btn-block btn-lg mb-5 shadow finfonth text-white talk_to_an_export" style="border-radius: 50px;z-index: 3;">Licenses</a>
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-5 col-12">
							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="çard shadow">
										<img src="{{asset('frontend/assets/ui/card-img.svg')}}" style="position: relative; z-index: 2;" class="img-fluid">
										<div class="card-body" style="position: absolute; z-index: 3;margin-top: -233px; margin-left: 5px;background-color: transparent;">
											<div class="row justify-content-center">
												<div class="col-lg-3 col-md-3 col-sm-3 col-3">
													<img src="{{asset('frontend/assets/ui/card-pic.jpg')}}" class="rounded-circle img-fluid call_girl" alt="card-pic.jpg')}}">
												</div>
												<div class="col-lg-9 col-md-9 col-sm-9 col-9">
													<center class="call_girl">
													<p class="mt-2 text-white finfonth">
														Richa Singh &nbsp;&nbsp;&nbsp;<i class="fa fa-circle text-success" style="font-size: 12px;border-width: 2px; border-color:white;"></i>&nbsp;<span style="font-size: 12px;">Online</span>
													</p>
													<p class="mt-n3 text-white text-capitalize finfonth">Expertise in <strong>Virtual CFO Services</strong></p>
													</center>
												</div>
											</div>
											<div class="row justify-content-end">
												<div class="col-lg-10 col-md-10 col-sm-10 col-10">
													<i id="stars" style="font-size: 29px;"></i>
													<span class="badge badge-startinfo finfonth"style="font-size: 29px;">4.7</span>
												</div>
											</div>
											<div class="row justify-content-center mt-4 mb-5">
												<div class="col-lg-6 col-md-6 col-sm-6 col-6">
													<a href="tel:+91 8810549414" class="btn btn-chatblue btn-lg btn-block finfonth call_girl_btn" style="border-radius: 50px;"><span style="font-size: 17px;border-radius: 50px;">Call Now</span></a>

												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-6">
													<a href="http://wa.link/v4hygf" target="_blank"  class="btn btn-chatgreen btn-lg btn-block finfonth call_girl_btn" style="border-radius: 50px;"><span style="font-size: 17px;">Chat Now</span></a>
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
	<section id="video_testimonial" class="mb-5">
	<div class="container">
		<div class="row justify-content-center">
			<center><strong><h1 class="font-weight-bold textfinoh">Video Testimonials</h1></strong>
			<p class="text-secondary finfonth" style="font-size: 18px;">Connect with our satisfied customers and learn how our video testimonials can benefit your business today.</p>
			</center>
			<div class="col-lg-12 col-md-12 col-12 mt-5 finofontp">
				<div id="demo" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
						<li data-target="#demo" data-slide-to="2"></li>
					</ul>

					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item">
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
																<div class="row justify-content-center">
										<div class="col-lg-4 col-md-4 col-12">
											<div class="card">
												<div class="embed-responsive embed-responsive-21by9" style="height: 200px;">
													<iframe width="885" height="600" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
												</div>
												<div class="row justify-content-center mt-2">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">
																<p class="ml-2 font-weight-bold vt-heading"></p>
																<p class="ml-2 text-secondary mt-n3" style="font-size: 12px;"> Shararat</p>
															</div>
														</div>

													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="row justify-content-center">
															<div class="col-12">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
													</div>
					</div>

					<!-- Left and right controls -->
					<!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
										<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
										<span class="carousel-control-next-icon"></span>
					</a> -->
				</div>
			</div>
		</div>
	</div>
</section><section class="service-page"  id="overview_section" class="mt-2 mb-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="service-content row">
					<div class="col-lg-8 col-md-8 col-sm-8 col-8 overview_large">
						<h1 class="title overview_heading_large">Overview of Virtual CFO Services</h1>
						<h4 class="title overview_heading_small font-weight-bold">Overview of Virtual CFO Services</h4>
						<p class="finfonth text-secondary">VCFO services provide financial expertise and strategic guidance to businesses on a part-time or as-needed basis. These services can include financial planning and analysis, budgeting and forecasting, cash flow management, risk management, and financial reporting.</p>
						<p class="finfonth text-secondary">By outsourcing CFO functions, businesses can benefit from the expertise of experienced professionals without the expense of hiring a full-time CFO. Virtual CFOs work remotely, using technology to communicate and collaborate with clients. This flexibility allows businesses to access the financial expertise they need while remaining focused on their core operations.</p>
						<div class="service-link mt-3" id="service-link">
							<ul>
								<li>
									<a href="#overview" class="active text-decoration-none overview_btn" style="padding: 5px 10px 5px 10px; border-radius: 20px;">Overview</a>
								</li>
								<li>
									<a href="#benefits" class="text-decoration-none benefit_btn" style="padding: 5px 10px 5px 10px; border-radius: 20px;">Benefits</a>
								</li>
								<li>
									<a href="#list_articles" class="text-decoration-none listicle_btn" style="padding: 5px 10px 5px 10px; border-radius: 20px;">Listicles</a>
								</li>
								<li>
									<a href="#faq" class="text-decoration-none faq_btn" style="padding: 5px 10px 5px 10px; border-radius: 20px;">FAQs</a>
								</li>
							</ul>
						</div>
						<div id="overview" class="service-space">
							<div class="service-link-item">
								<div class="row">
									<div class="title">
										<h2>Overview</h2>
									</div>
									<div class="overview-content">
										<p>Virtual CFO services provide businesses with financial expertise and strategic guidance on a part-time or as-needed basis, helping them to improve financial performance and achieve their goals.</p>
										<p>VCFO services can be particularly beneficial for small and medium-sized businesses that may not have the resources to hire a full-time CFO, providing them with access to experienced financial professionals at an affordable cost.</p>
										<p>Virtual chief financial officers provide financial planning and analysis, budgeting and forecasting, cash flow management, risk management, financial reporting, and strategic guidance.</p>
										<p>Virtual CFOs work remotely, using technology to communicate and collaborate with clients, providing businesses with flexibility and convenience while still receiving the financial support they need.</p>
									</div>
									<p>VCFO services can be particularly beneficial for small and medium-sized businesses that may not have the resources to hire a full-time CFO. By outsourcing these services, businesses can improve their financial performance and gain a competitive advantage in their industry. Virtual chief financial officer services offer businesses an affordable and flexible solution to their financial management needs.</p>

									<!-- <h4>Overview of Virtual CFO Services</h4> -->
									<p>Accounting is experiencing some major changes in the process of its growth; number of firms has increased exponentially who are vying with each other. Small private companies currently have so much decision that standard service like tax preparation, bookkeeping, and compliance are turning out to be commoditised. There's so little differentiation in this packed market that it has affected the market value of these services</p>
									<h3 class="mt-2 mb-2 font-weight-bold text-center vcfo_service_assist_you">VCFO Services will assist you in the following ways:</h3>
									<h4 class="mt-2 mb-2 font-weight-bold text-center vcfo_assist_you">VCFO Services will assist you in the following ways:</h4>
									<img src="{{asset('frontend/assets/ui/virtual-cfo-services-Page-img.svg')}}" alt="Virtual CFO Services-img" class="img-fluid virtual-cfo-services-Page-img">
									<ol class="text-secondary">
										<li class="mt-3">
											<i class='fa fa-check-circle vcfo_li_i'></i>
											<strong class="ml-1">
												Accounting & Bookkeeping:
											</strong>
											<p class="ml-4 vcfo_li_p">We offer real-time visibility of your business's financials, so you can make informed decisions.
											</p>
										</li>
										<li class="mt-3">
											<i class='fa fa-check-circle vcfo_li_i'></i>
											<strong class="ml-1">Tax & Legal Compliance Management: </strong>
											<p class="ml-4 vcfo_li_p">We take care of all your compliance needs, so you can raise funds with confidence.</p></li>
										<li class="mt-3">
											<i class='fa fa-check-circle vcfo_li_i'></i>
											<strong class="ml-1">Fundraising Assistance: </strong>
											<p class="ml-4 vcfo_li_p">We help you with financial modelling, pitch deck improvisation, startup grants and funding, investor connections, and term sheet expediting.</p></li>
										<li class="mt-3">
											<i class='fa fa-check-circle vcfo_li_i'></i>
											<strong class="ml-1">	Payroll & Employee Matters: </strong>
											<p class="ml-4 vcfo_li_p">We help you build a professional culture towards your employees. All our services come with proper SOPs and processes, so you can scale up without any hassle.</p></li>
										<li class="mt-3">
											<i class='fa fa-check-circle vcfo_li_i'></i>
											<strong class="ml-1">MIS Reporting: </strong>
											<p class="ml-4 vcfo_li_p"> We give you a complete hold on your business KPIs on a real-time basis.</p></li>
										<li class="mt-3">
											<i class='fa fa-check-circle vcfo_li_i'></i>
											<strong class="ml-1">Legal Agreements: </strong>
											<p class="ml-4 vcfo_li_p">We provide complete legal protection for your startup while scaling up.</p></li>


									</ol>
									<!-- <div class="special-legel">
										<h5>Startups Looking to <strong>Connect</strong> with us?</h5>
										<a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#assistance_modal">Request Call back</a>
									</div> -->

								</div>
								<!-- <div class="title">
									<h2>Benefits</h2>
								</div>
								<ul>
									<li>A company with the right registration offers several benefits. Any registered business is a symbol of authenticity</li>
									<li>It acts as a shield for personal liability. It protects from other uncertain losses and risks</li>
									<li>A genuine customer gets attracted to only a registered company</li>
									<li>Procures good investment and bank credits from consistent investors with affluence</li>
									<li>Your company’s asset is protected by offered liability protection</li>
									<li>Greater stability and the right amount of capital contribution</li>
									<li>Rises the potential to expand and grow big</li>
								</ul> -->
							</div>
						</div>
						<div id="benefits" class="service-space">
							<div class="service-link-item">
								<div class="title">
									<h2>Benefits</h2>
								</div>
								<p>VCFO offer businesses financial expertise and strategic guidance at an affordable cost, providing access to experienced professionals without the expense of a full-time CFO. These services can help businesses improve financial planning and analysis, streamline financial processes, manage cash flow, mitigate financial risks, and achieve their financial goals.</p>
                                <div class="row justify-content-center" id="benefit_tags">
									<div class="col-lg-6 col-md-6 col-6 mt-2 mb-2 benefit_btn_1">
										<p class="p-centered" style="background-color: #E8FEF2;border-radius: 0px 30px 30px 0px; padding: 10px;">&nbsp;Cost-effectiveness&nbsp;<span
												class="badge badge-success float-right mt-n1" style="font-size: 24px; border-radius: 20px;">1</span></p>
									</div>
									<div class="col-lg-6 col-md-6 col-6 mb-2 benefit_btn_1">
										<p class="p-centered" style="background-color: #E8FEF2;border-radius: 0px 30px 30px 0px; padding: 10px;">&nbsp;Flexibility&nbsp;<span
												class="badge badge-success float-right mt-n1" style="font-size: 24px; border-radius: 20px;">2</span></p>
									</div>
									<div class="col-lg-6 col-md-6 col-6 mb-2 benefit_btn_1">
										<p class="p-centered" style="background-color: #E8FEF2;border-radius: 0px 30px 30px 0px; padding: 10px;">&nbsp;Expertise&nbsp;
											<span class="badge badge-success float-right mt-n1" style="font-size: 24px; border-radius: 20px;">3</span>
										</p>
									</div>
									<div class="col-lg-6 col-md-6 col-6 mb-2 benefit_btn_1">
										<p class="p-centered" style="background-color: #E8FEF2;border-radius: 0px 30px 30px 0px; padding: 10px;">&nbsp;Remote work &nbsp;
											<span class="badge badge-success float-right mt-n1" style="font-size: 24px; border-radius: 20px;">4</span>
										</p>
									</div>
									<div class="col-lg-6 col-md-6 col-6 mb-2 benefit_btn_1">
										<p class="p-centered" style="background-color: #E8FEF2;border-radius: 0px 30px 30px 0px; padding: 10px;">&nbsp;Objectivity &nbsp;
											<span class="badge badge-success float-right mt-n1" style="font-size: 24px; border-radius: 20px;">5</span>
										</p>
									</div>
									<div class="col-lg-6 col-md-6 col-6 mb-2 benefit_btn_1">
										<p class="p-centered" style="background-color: #E8FEF2;border-radius: 0px 30px 30px 0px; padding: 10px;">&nbsp;Focus &nbsp;
											<span class="badge badge-success float-right mt-n1" style="font-size: 24px; border-radius: 20px;">6</span>
										</p>
									</div>
									<div class="col-lg-6 col-md-6 col-6 mb-2 benefit_btn_1">
										<p class="p-centered" style="background-color: #E8FEF2;border-radius: 0px 30px 30px 0px; padding: 10px;">&nbsp;Management &nbsp;
											<span class="badge badge-success float-right mt-n1" style="font-size: 24px; border-radius: 20px;">7</span>
										</p>
									</div>
									<div class="col-lg-6 col-md-6 col-6 mb-2 benefit_btn_1">
										<p class="p-centered" style="background-color: #E8FEF2;border-radius: 0px 30px 30px 0px; padding: 10px;">&nbsp;Scalability &nbsp;
											<span class="badge badge-success float-right mt-n1" style="font-size: 24px; border-radius: 20px;">8</span>
										</p>
									</div>
								</div>
								<ol class="mt-3 text-secondary">
									<li class="mt-3">
										<i class='fa fa-check-circle vcfo_li_i'></i>
										<strong class="ml-1">
											Cost-effectiveness:
										</strong>
										<p class="ml-4 vcfo_li_p">Hiring a virtual CFO can be more cost-effective than hiring a full-time CFO, especially for small businesses or startups.</p>
									</li>
									<li class="mt-3">
										<i class='fa fa-check-circle vcfo_li_i'></i>
										<strong class="ml-1">
											Flexibility:
										</strong>
										<p class="ml-4 vcfo_li_p">Virtual chief financial officers offer their services on a part-time or project basis, which means that businesses can access financial expertise when they need it without committing to a full-time hire.
										</p>
									</li>
									<li class="mt-3">
										<i class='fa fa-check-circle vcfo_li_i'></i>
										<strong class="ml-1">
											Expertise:
										</strong>
										<p class="ml-4 vcfo_li_p">These CFOs are experienced financial professionals who can offer a wide range of financial services, such as financial reporting, budgeting and forecasting, and strategic planning.</p>
									</li>
									<li class="mt-3">
										<i class='fa fa-check-circle vcfo_li_i'></i>
										<strong class="ml-1">
											Remote work:
										</strong>
										<p class="ml-4 vcfo_li_p">VCFOs can work remotely, which means that businesses can access top-tier financial talent regardless of location.
										</p>
									</li>
									<li class="mt-3">
										<i class='fa fa-check-circle vcfo_li_i'></i>
										<strong class="ml-1">
											Objectivity:
										</strong>
										<p class="ml-4 vcfo_li_p">They are able to provide an objective viewpoint on a company's financial situation, as they are not directly involved in the day-to-day operations of the business.
										</p>
									</li>
									<li class="mt-3">
										<i class='fa fa-check-circle vcfo_li_i'></i>
										<strong class="ml-1">
											Focus:
										</strong>
										<p class="ml-4 vcfo_li_p">By outsourcing financial management to a VCFO, businesses can free up their time and resources to focus on their core operations and strategic objectives.
										</p>
									</li>
									<li class="mt-3">
										<i class='fa fa-check-circle vcfo_li_i'></i>
										<strong class="ml-1">
											Scalability:
										</strong>
										<p class="ml-4 vcfo_li_p">As a business grows, its financial management needs may change. Virtual CFOs can adapt to these changing needs and provide customised financial management solutions to help businesses scale and succeed.
										</p>
									</li>
								</ol>

								<section id="change_the_way_you_work" class="mt-5 mb-2">
	<div class="row justify-content-center">
		<div class="col-lg-12 col-md-12 col-12">
			<h1 class="text-secondary finofonth change_the_way_you_work_1">Change the way you work</h1>
			<h3 class="text-secondary finofonth change_the_way_you_work_2">Change the way you work</h3>
			<p class="text-secondary finofontp">TO implement a Virtual CFO Service in your organisation first you need to implement cloud-based accounting system in your organization and change the way of interaction with your clients.</p>
			<ol class="text-secondary finofontp">
				<li class="mt-3">
					<i class='fa fa-check-circle vcfo_li_i'></i>&nbsp;
					<span class="vcfo_li_p">Stop making process-driven services as the center of your business.</span>
				</li>
				<li class="mt-3">
					<i class='fa fa-check-circle vcfo_li_i'></i>&nbsp;
					<span class="vcfo_li_p"> Provide more consulting services</span>
				</li>
				<li class="mt-3">
					<i class='fa fa-check-circle vcfo_li_i'></i>&nbsp;
					<span class="vcfo_li_p"> Work with clients in achieving their goal.</span>
				</li>
				<li class="mt-3">
					<i class='fa fa-check-circle vcfo_li_i'></i>&nbsp;
					<span class="vcfo_li_p">Make healthy professional relation with your clients.</span>
				</li>
				<li class="mt-3">
					<i class='fa fa-check-circle vcfo_li_i'></i>&nbsp;
					<span class="vcfo_li_p">Give feedback your clients</span>
				</li>
				<li class="mt-3">
					<i class='fa fa-check-circle vcfo_li_i'></i>&nbsp;
					<span class="vcfo_li_p">Try to become a trusted business advisor</span>
				</li>
			</ol>
		</div>
	</div>
</section><section id="how_to_suraj_will_help_you" class="mt-5 mb-2">
	<div class="row justify-content-center">
		<div class="col-lg-12 col-md-12 col-12">
			<h2 class="text-secondary finofonth how_to_suraj_will_help_you_1">How to <strong>suraj</strong> will help you?</h2>
			<h4 class="text-secondary text-center finofonth how_to_suraj_will_help_you_2">How to <strong>suraj</strong> will help you?</h4>
			`<div class="row">
				<div class="col-lg-12 col-md-12 col-12">
					<img src="{{asset('frontend/assets/ui/How suraj-help-img.png')}}" alt="how_to_suraj_will_help_you" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>							</div>
						</div>
						<div id="list_articles" class="service-space mt-5">
							<div class="service-link-item">
								<div class="Listicles">
									<h2 class="text-secondary key_vcfo_services_1">Key Virtual CFO Services</h2>
									<h4 class="text-secondary key_vcfo_services_2">Key Virtual CFO Services</h4>
									<!-- <p>A few considerations are necessarily needs to be made before you go ahead with the plan of starting a Private Limited company. Ensure that you are ready with the decisions of the following points:</p> -->
								</div>
								<!-- <h4>Important Virtual CFO Services</h4> -->
								<div class="row justify-content-center" id="important_virtua_cfo_services">
									<div class="col-lg-10 col-md-10 col-12">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-6 mt-3 list_article">
												<p class="text-center text-white finfonth" style="background-color: #37669F;border-radius: 30px 0px 30px 0px; padding: 10px;">&nbsp;Financial-Advisory&nbsp;
												</p>
											</div>
											<div class="col-lg-6 col-md-6 col-6 mt-3 list_article">
												<p class="text-center text-white finfonth" style="background-color: #37669F;border-radius: 30px 0px 30px 0px; padding: 10px;">&nbsp;Break Even Analysis&nbsp;
												</p>
											</div>
											<div class="col-lg-6 col-md-6 col-6 mt-3 list_article">
												<p class="text-center text-white finfonth" style="background-color: #37669F;border-radius: 30px 0px 30px 0px; padding: 10px;">&nbsp; Accounting Functions&nbsp;
												</p>
											</div>
											<div class="col-lg-6 col-md-6 col-6 mt-3 list_article">
												<p class="text-center text-white finfonth" style="background-color: #37669F;border-radius: 30px 0px 30px 0px; padding: 10px;">&nbsp; Cash Flow Forecasting&nbsp;
												</p>
											</div>
											<div class="col-lg-6 col-md-6 col-6 mt-3 list_article">
												<p class="text-center text-white finfonth" style="background-color: #37669F;border-radius: 30px 0px 30px 0px; padding: 10px;">&nbsp;Cost Management &nbsp;
												</p>
											</div>
											<div class="col-lg-6 col-md-6 col-6 mt-3 list_article">
												<p class="text-center text-white finfonth" style="background-color: #37669F;border-radius: 30px 0px 30px 0px; padding: 10px;">&nbsp;Audit Support &nbsp;
												</p>
											</div>
											<div class="col-lg-6 col-md-6 col-6 mt-3 list_article">
												<p class="text-center text-white finfonth" style="background-color: #37669F;border-radius: 30px 0px 30px 0px; padding: 10px;">&nbsp;Debt Planning &nbsp;
												</p>
											</div>
											<div class="col-lg-6 col-md-6 col-6 mt-3 list_article">
												<p class="text-center text-white finfonth" style="background-color: #37669F;border-radius: 30px 0px 30px 0px; padding: 10px;">&nbsp;Budgeting &nbsp;
												</p>
											</div>
										</div>
									</div>
								</div>
								<ol id="important_virtua_cfo_services_content" class="text-secondary">
									<li class="mt-3 finfonth">
										<i class='fa fa-check-circle vcfo_li_i'></i>
										<strong class="ml-1">
											Financial Advisory:
										</strong>
										<p class="ml-4 vcfo_li_p">Virtual CFO gives monetary direction based on the need. An appropriate financial planning paves the way for the growth of the business. With this, senior administration can concentrate on the important zones without contemplating the budgetary issues.
										</p>
									</li>
									<li class="mt-3 finfonth">
										<i class='fa fa-check-circle vcfo_li_i'></i>
										<strong class="ml-1">
											Break Even Analysis :
										</strong>
										<p class="ml-4 vcfo_li_p">Under break even analysis, absolute cost (fixed + variable) is contrasted with the income that will decide a point where business neither makes benefit nor loss. Virtual CFO will help in inferring break even analysis by which organization will have the option to control its costs.
										</p>
									</li>
									<li class="mt-3 finfonth">
										<i class='fa fa-check-circle vcfo_li_i'></i>
										<strong class="ml-1">
											Accounting Functions of the Organization :
										</strong>
										<p class="ml-4 vcfo_li_p">Accounting services are the significant part of the association. It is a mode which helps in the evaluation of association's monetary bookkeeping health check. Here, accounting health check signifies a total evaluation of the budgetary and accounting part of the association. For this, a prominent expert in the administration is required to set up extensive information identifying with the bookkeeping practices, for example, planning of information, and other accounting policies.
										</p>

										<p class="ml-4 vcfo_li_p">Planning of different policies and execution of key thoughts are required so as to have a well-defined accounting health check. In this procedure legitimate guidance pertaining to current turnover, benefit, business desires, operational and bookkeeping frameworks and key execution markers are examined and assessed. The business structure, tax proficiency, development forthcoming is likewise considered in accounting health check.
										</p>
									</li>
									<li class="mt-3 finfonth">
										<i class='fa fa-check-circle vcfo_li_i'></i>
										<strong class="ml-1">
											Cash Flow Forecasting:
										</strong>
										<p class="ml-4 vcfo_li_p">The other fundamental help of the virtual CFO is to forecast cash flows. Organizations must have better comprehension of cash position to take right choice. You more likely than not made appropriate cash arrangements to meet the future commitments. It helps in taking choice with respect to what amount of fund is required?
										</p>
									</li>
									<li class="mt-3 finfonth">
										<i class='fa fa-check-circle vcfo_li_i'></i>
										<strong class="ml-1">
											Cost Management :
										</strong>
										<p class="ml-4 vcfo_li_p">Cost management is a procedure under which virtual CFO makes a legitimate wanting to limit the expense of the organization. Virtual CFO helps in deciding the working productivity. A variable expense is broke down by the virtual CFO to control it.
										</p>
									</li>
									<li class="mt-3 finfonth">
										<i class='fa fa-check-circle vcfo_li_i'></i>
										<strong class="ml-1">
											Audit Support :
										</strong>
										<p class="ml-4 vcfo_li_p">Start to finish audit support is given by the virtual CFO by resolving questions asked by the auditors.
										</p>
									</li>
									<li class="mt-3 finfonth">
										<i class='fa fa-check-circle vcfo_li_i'></i>
										<strong class="ml-1">
											Debt Planning :
										</strong>
										<p class="ml-4 vcfo_li_p">A virtual CFO makes a legitimate debt planning with the aim to accomplish the ideal objective. An appropriate debt planning is important to control the obligation.
										</p>
									</li>
									<li class="mt-3 finfonth">
										<i class='fa fa-check-circle vcfo_li_i'></i>
										<strong class="ml-1">
											Budgeting :
										</strong>
										<p class="ml-4 vcfo_li_p">Virtual CFO administrations incorporate budgeting. Budgeting is done with the purpose to keep the track of all the operations business is performing. Spending should be explored on month to month or quarterly basis so changes can be made in like manner to meet the end goal.
										</p>
									</li>
								</ol>
							</div>
						</div>
						<div id="faq">
							<div class="service-link-item">
								<div class="title">
									<h2>FAQs</h2>
								</div>
								<div class="accordion" id="accordionExample">
									<div class="card bg-white">
										<div class="card-header bg-white" id="headingOne">
											<h2 class="mb-0">
												<button type="button" class="btn btn-link finfonth" data-toggle="collapse" data-target="#collapseOne">What services do VCFOs offer? <i class="fa fa-plus" style="color:#37609B;"></i></button>
											</h2>
										</div>
										<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
											<div class="card-body">
												<p class="finfonth">
													Virtual chief financial officers offer a range of financial services, such as financial reporting, cash flow management, budgeting and forecasting, and strategic planning.
												</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header bg-white" id="headingTwo">
											<h2 class="mb-0">
												<button type="button" class="btn btn-link collapsed finfonth" data-toggle="collapse" data-target="#collapseTwo">
													Are virtual CFOs expensive?
													<i class="fa fa-plus"></i>
												</button>
											</h2>
										</div>
										<div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
											<div class="card-body">
												<p class="finfonth">
													VCFOs can be more cost-effective than hiring a full-time CFO, especially for small businesses or startups.
												</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header bg-white" id="headingThree">
											<h2 class="mb-0">
												<button type="button" class="btn btn-link collapsed finfonth" data-toggle="collapse" data-target="#collapseThree">What's the difference between a virtual CFO and a traditional CFO?<i class="fa fa-plus"></i></button>
											</h2>
										</div>
										<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
											<div class="card-body">
												<p class="finfonth">A Virtual chief financial officer provides financial management services on a part-time or project basis and works remotely, while a traditional CFO is a full-time executive who works on-site and is responsible for managing a company's financial operations.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header bg-white" id="headingFour">
											<h2 class="mb-0">
												<button type="button" class="btn btn-link collapsed finfonth" data-toggle="collapse" data-target="#collapseFour">Are virtual CFOs suitable for startups and small businesses? <i class="fa fa-plus"></i></button>
											</h2>
										</div>
										<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
											<div class="card-body">
												<p class="finfonth">
													Yes, VCFOs can be especially beneficial for startups and small businesses, as they offer cost-effective and flexible financial management solutions that can help these businesses grow and succeed.
												</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header bg-white" id="headingFive">
											<h2 class="mb-0">
												<button type="button" class="btn btn-link collapsed finfonth" data-toggle="collapse" data-target="#collapseFive">Are virtual chief financial officers experienced, financial professionals? <i class="fa fa-plus"></i></button>
											</h2>
										</div>
										<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
											<div class="card-body">
												<p class="finfonth">Yes, virtual CFOs are experienced financial professionals who can offer a wide range of financial services. </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-4 overview_small">
															<div class="formarea fixedform">
						<div class="card shadow" style="border-radius: 20px;">
							<div class="card-body bg-white">
								<div class="card-title font-weight-bold text-center" style="color:#37609B;font-size: 20px;">Free Consultation By Expert
								</div>
								<form action="service_process" method="post" accept-charset="utf-8">
								<!-- <form action="service_process"> -->
									<div class="row">
										<div class="col-lg-12 col-sm-12 form-group mt-4">
											<!-- <strong>Name*</strong> -->
											<input type="text" name="name" value="" class="form-control" placeholder="Name*" required>
										</div>
										<div class="col-lg-12 col-sm-12 form-group">
											<!-- <strong>Mobile Number*</strong> -->
											<input type="text" name="mobile" value="" maxlength="10" class="form-control" placeholder="Mobile*" required>
											<p id="smobileError" class="error validation_message_error"></p>
										</div>
										<div class="col-lg-12 col-sm-12 form-group">
											<!-- <strong>Email*</strong> -->
											<input type="email" name="email" value="" class="form-control" placeholder="Email*" required>
											<p id="semailError" class="error validation_message_error"></p>
										</div>
										<div class="col-lg-12 col-sm-12 form-group">
											<!-- <strong>State*</strong> -->
											<select class="form-control" name=state_id id=state_id required><option value="">Select State*</option><option value="1">Andaman & Nicobar Islands</option><option value="2">Andhra Pradesh</option><option value="3">Arunachal Pradesh</option><option value="4">Assam</option><option value="5">Bihar</option><option value="7">Chhattisgarh</option><option value="8">Dadra & Nagar Haveli</option><option value="9">Daman & Diu</option><option value="10">Delhi</option><option value="11">Goa</option><option value="12">Gujarat</option><option value="13">Haryana</option><option value="14">Himachal Pradesh</option><option value="15">Jammu & Kashmir</option><option value="16">Jharkhand</option><option value="17">Karnataka</option><option value="18">Kerala</option><option value="19">Lakshadweep</option><option value="20">Madhya Pradesh</option><option value="21">Maharashtra</option><option value="22">Manipur</option><option value="23">Meghalaya</option><option value="24">Mizoram</option><option value="25">Nagaland</option><option value="26">Odisha</option><option value="27">Puducherry</option><option value="28">Punjab</option><option value="29">Rajasthan</option><option value="30">Sikkim</option><option value="31">Tamil Nadu</option><option value="32">Telangana</option><option value="33">Tripura</option><option value="34">Uttar Pradesh</option><option value="35">Uttarakhand</option><option value="36">West Bengal</option></select>										</div>
										<input type="hidden"  name="service_slug" value="virtual-cfo-services"/>
										<input type="hidden"  name="servid" value="85"/>
																				<div class="col-lg-12 form-group mt-3">
											<input type="submit" class="btn btn-darkprimary btn-block" id="servicebtnM" value="Submit" style="border-radius: 20px;">
										</div>


										<!-- <div class="col-lg-12 form-group">
											<p>Need to speak to an expert? <a href="#" data-toggle="modal" data-target="#assistance_modal">Get Free Consultation</a></p>
										</div> -->
									</div>
								</form>
							</div>
						</div>
					</div>					</div>



								</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
	  // $("#overview").mouseenter(function(){
	  // 	$('.overview_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
	  // });
	  // $("#benefits").mouseenter(function(){
	  // 	$('.benefit_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
	  // });
	  // $("#list_articles").mouseenter(function(){
	  // 	$('.listicle_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
	  // });
	  // $("#faq").mouseenter(function(){
	  // 	$('.faq_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
	  // });

	  //  $("#overview").mouseover(function(){
	  // 	$('.overview_btn').addClass('active btn btn-default btn-lg service_tag_default');
	  // });
	  // $("#benefits").mouseover(function(){
	  // 	$('.benefit_btn').addClass('active btn btn-default btn-lg service_tag_default');
	  // });
	  // $("#list_articles").mouseover(function(){
	  // 	$('.listicle_btn').addClass('active btn btn-default btn-lg service_tag_default');
	  // });
	  // $("#faq").mouseover(function(){
	  // 	$('.faq_btn').addClass('active btn btn-default btn-lg service_tag_default');
	  // });

	  $("#overview").hover(function(){
	  	$('.overview_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
	  	$('.faq_btn, .benefit_btn, .listicle_btn').removeClass('active btn-darkprimary service_tag_white');
	  	$('.faq_btn .benefit_btn .listicle_btn').addClass('btn-default service_tag_default');
	  });
	  $("#benefits").hover(function(){
	  	$('.benefit_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
	  	$('.faq_btn, .overview_btn, .listicle_btn').removeClass('active btn-darkprimary service_tag_white');
	  	$('.faq_btn .overview_btn .listicle_btn').addClass('btn-default service_tag_default');
	  });
	  $("#list_articles").hover(function(){
	  	$('.listicle_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
	  	$('.faq_btn, .overview_btn, .benefit_btn').removeClass('active btn-darkprimary service_tag_white');
	  	$('.faq_btn, .overview_btn, .benefit_btn').addClass('btn-default service_tag_default');
	  });
	  $("#faq").hover(function(){
	  	$('.faq_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
	  	$('.listicle_btn, .overview_btn, .benefit_btn').removeClass('active btn-darkprimary service_tag_white');
	  	$('.listicle_btn, .overview_btn, .benefit_btn').addClass('btn-default service_tag_default');
	  });


	  $("#overview").click(function(){
		$('.overview_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
		$('.faq_btn, .benefit_btn, .listicle_btn').removeClass('active btn-darkprimary service_tag_white');
		$('.faq_btn .benefit_btn .listicle_btn').addClass('btn-default service_tag_default');
	  });
	  $("#benefits").click(function(){
		$('.benefit_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
		$('.faq_btn, .overview_btn, .listicle_btn').removeClass('active btn-darkprimary service_tag_white');
		$('.faq_btn .overview_btn .listicle_btn').addClass('btn-default service_tag_default');
	  });
	  $("#list_articles").click(function(){
		$('.listicle_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
		$('.faq_btn, .overview_btn, .benefit_btn').removeClass('active btn-darkprimary service_tag_white');
		$('.faq_btn, .overview_btn, .benefit_btn').addClass('btn-default service_tag_default');
	  });
	  $("#faq").click(function(){
		$('.faq_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
		$('.listicle_btn, .overview_btn, .benefit_btn').removeClass('active btn-darkprimary service_tag_white');
		$('.listicle_btn, .overview_btn, .benefit_btn').addClass('btn-default service_tag_default');
	});
});

</script>


				<section id="advisory_services" class="mt-2 mb-2" style="background-color: #37609B;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5 col-md-5 col-12 mt-5">
				<h2 class="text-white font-weight-bolder finofonth advisory_heading1 advisory_services_1">
				suraj <span class="advisory_heading2">Advisory Services</span>
				</h2>
				<h4 class="text-white font-weight-bolder finofonth advisory_heading1 advisory_services_2">
				suraj <span class="advisory_heading2">Advisory Services</span>
				</h4>
				<p class="text-white mt-n2 ml-2 finofontp">suraj manages legal,  financial & Compliance services through its team of professionals with the help our own technology.</p>
				<div class="row justify-content-start surajQR">
					<div class="col-lg-4 col-md-4 col-6 mb-5">
						<img src="{{asset('frontend/assets/ui/surajQR.svg')}}" class="img-fluid img-responsive">
					</div>
					<div class="col-lg-8 col-md-8 col-6 mb-5 scan_qr_code">
						<p class="text-white mt-2 finofontp">Scan this QR Code...</p>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-12">
				<img src="{{asset('frontend/assets/ui/advisory Services- img.svg')}}" alt="Advisory Services- img" class="advisory_services_img img-fluid mt-5 mb-5">
			</div>
		</div>
	</div>
</section><section id="visit_our_blogs" class="mt-2 mb-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<h2 class="text-center text-dark">
					    Visit Our Related Blogs
					</h2>
				</div>
				<div class="col-lg-12 col-md-12 col-12 mt-5">
					<div id="blogCarousals" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#blogCarousal" data-slide-to="0" class="active"></li>
							<li data-target="#blogCarousal" data-slide-to="1"></li>
							<li data-target="#blogCarousal" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="row justify-content-center">
									<div class="col-lg-4 col-md-4 col-12">
										<div class="card">
											<img src="{{asset('frontend/https://www.suraj.com/blogs/wp-content/uploads/2023/04/21-Banner.jpg')}}" alt="21-Banner.jpg')}}" class="img-fluid">
											<div class="card-body bg-white">
												<p><span class="float-left" style="font-size: 10px;">By Aishwarya Agrawal</span> <span class="text-secondary float-right"  style="font-size: 10px;">April 26, 2023</span></p>
												<h6 class="blog_heading font-weight-bold finofonth mt-4" id="blog_heading">Rights and Obligations of Patentees in India</h6>
												<a href="https://www.suraj.com/blogs/rights-and-obligations-of-patentees-in-india/" target="_blank" class="btn btn-light btn-sm float-right" style="border-radius: 20px;">More &nbsp;&nbsp;<i class="fa fa-angle-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-12">
										<div class="card">
											<img src="{{asset('frontend/https://www.suraj.com/blogs/wp-content/uploads/2023/04/36-Banner.jpg')}}" alt="authorship-and-ownership-of-copyright-in-india-understanding-the-basics" class="img-fluid">
											<div class="card-body bg-white">
												<p><span class="float-left" style="font-size: 10px;">By Aishwarya Agrawal</span> <span class="text-secondary float-right"  style="font-size: 10px;">April 26, 2023</span></p>
												<h6 class="blog_heading font-weight-bold finofonth" id="blog_heading">Authorship and Ownership of Copyright in India: Understanding the Basics</h6>
												<a href="https://www.suraj.com/blogs/authorship-and-ownership-of-copyright-in-india-understanding-the-basics/" target="_blank" class="btn btn-light btn-sm float-right" style="border-radius: 20px;">More &nbsp;&nbsp;<i class="fa fa-angle-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-12">
										<div class="card">
											<img src="{{asset('frontend/https://www.suraj.com/blogs/wp-content/uploads/2023/04/47-Banner.jpg')}}" alt="difference-between-trust-and-society" class="img-fluid">
											<div class="card-body bg-white">
												<p><span class="float-left" style="font-size: 10px;">By Aishwarya Agrawal</span> <span class="text-secondary float-right"  style="font-size: 10px;">April 26, 2023</span></p>
												<h6 class="blog_heading font-weight-bold finofonth" id="blog_heading">Difference between Trust and Society</h6>
												<a href="https://www.suraj.com/blogs/difference-between-trust-and-society/" target="_blank" class="btn btn-light btn-sm float-right" style="border-radius: 20px;">More &nbsp;&nbsp;<i class="fa fa-angle-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row justify-content-center">
									<div class="col-lg-4 col-md-4 col-12">
										<div class="card">
											<img src="{{asset('frontend/https://www.suraj.com/blogs/wp-content/uploads/2023/04/41-Banner.jpg')}}" alt="disadvantages-of-intellectual-property-rights" class="img-fluid">
											<div class="card-body bg-white">
												<p><span class="float-left" style="font-size: 10px;">By Aishwarya Agrawal</span> <span class="text-secondary float-right"  style="font-size: 10px;">April 26, 2023</span></p>
												<h6 class="blog_heading font-weight-bold finofonth" id="blog_heading">Disadvantages of Intellectual Property Rights</h6>
												<a href="https://www.suraj.com/blogs/disadvantages-of-intellectual-property-rights/" target="_blank" class="btn btn-light btn-sm float-right" style="border-radius: 20px;">More &nbsp;&nbsp;<i class="fa fa-angle-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-12">
										<div class="card finofontp">
											<img src="{{asset('frontend/https://www.suraj.com/blogs/wp-content/uploads/2023/04/44-Banner.jpg')}}" alt="epfo-registration-a-step-by-step-guide" class="img-fluid">
											<div class="card-body bg-white">
												<p><span class="float-left" style="font-size: 10px;">By Aishwarya Agrawal</span> <span class="text-secondary float-right"  style="font-size: 10px;">April 24, 2023</span></p>
												<h6 class="blog_heading font-weight-bold finofonth" id="blog_heading">EPFO Registration: A Step-by-Step Guide</h6>
												<a href="https://www.suraj.com/blogs/epfo-registration-a-step-by-step-guide/" target="_blank" class="btn btn-light btn-sm float-right" style="border-radius: 20px;">More &nbsp;&nbsp;<i class="fa fa-angle-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-12">
										<div class="card finofontp">
											<img src="{{asset('frontend/https://www.suraj.com/blogs/wp-content/uploads/2023/04/35-Banner.jpg')}}" alt="overview-of-functions-of-ngos" class="img-fluid">
											<div class="card-body bg-white">
												<p><span class="float-left" style="font-size: 10px;">By Aishwarya Agrawal</span> <span class="text-secondary float-right"  style="font-size: 10px;">April 21, 2023</span></p>
												<h6 class="blog_heading font-weight-bold finofonth" id="blog_heading">Functions of NGOs</h6>

												<a href="https://www.suraj.com/blogs/overview-of-functions-of-ngos/" target="_blank" class="btn btn-light btn-sm float-right" style="border-radius: 20px;">More &nbsp;&nbsp;<i class="fa fa-angle-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row justify-content-center">
									<div class="col-lg-4 col-md-4 col-12">
										<div class="card finofontp">
											<img src="{{asset('frontend/https://www.suraj.com/blogs/wp-content/uploads/2023/04/38-Banner.jpg')}}" alt="society-registration-renewal-online" class="img-fluid">
											<div class="card-body bg-white">
												<p><span class="float-left" style="font-size: 10px;">By Aishwarya Agrawal</span> <span class="text-secondary float-right"  style="font-size: 10px;">April 26, 2023</span></p>
												<h6 class="blog_heading font-weight-bold finofonth" id="blog_heading">Society Registration Renewal Online</h6>
												<a href="https://www.suraj.com/blogs/society-registration-renewal-online/" target="_blank" class="btn btn-light btn-sm float-right" style="border-radius: 20px;">More &nbsp;&nbsp;<i class="fa fa-angle-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-12">
										<div class="card finofontp">
											<img src="{{asset('frontend/https://www.suraj.com/blogs/wp-content/uploads/2023/04/37-Banner.jpg')}}" alt="documents-required-for-trust-registration-in-india" class="img-fluid">
											<div class="card-body bg-white">
												<p><span class="float-left" style="font-size: 10px;">By Aishwarya Agrawal</span> <span class="text-secondary float-right"  style="font-size: 10px;">April 26, 2023</span></p>
												<h6 class="blog_heading font-weight-bold finofonth" id="blog_heading">Documents Required for Trust Registration in India</h6>
												<a href="https://www.suraj.com/blogs/documents-required-for-trust-registration-in-india/" target="_blank" class="btn btn-light btn-sm float-right" style="border-radius: 20px;">More &nbsp;&nbsp;<i class="fa fa-angle-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-12">
										<div class="card finofontp">
											<img src="{{asset('frontend/https://www.suraj.com/blogs/wp-content/uploads/2023/04/36-Banner.jpg')}}" alt="conversion-of-a-public-company-into-a-private-company" class="img-fluid">
											<div class="card-body bg-white">
												<p><span class="float-left" style="font-size: 10px;">By Aishwarya Agrawal</span> <span class="text-secondary float-right"  style="font-size: 10px;">April 19, 2023</span></p>
												<h6 class="blog_heading font-weight-bold finofonth" id="blog_heading">Conversion of a Public Company into a Private Company</h6>
												<a href="https://www.suraj.com/blogs/conversion-of-a-public-company-into-a-private-company/" target="_blank" class="btn btn-light btn-sm float-right" style="border-radius: 20px;">More &nbsp;&nbsp;<i class="fa fa-angle-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#blogCarousal" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#blogCarousal" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section><section id="get_started" class="mt-2 mb-5 bg-section" style="background-color: #37609B;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-9 col-md-9 col-12 mt-5 mb-1">
					<h2 class="text-white font-weight-bolder finofonth advisory_heading1 get_started_1">Get Started</h2>
					<h4 class="text-white font-weight-bolder finofonth advisory_heading1 get_started_2">Get Started</h4>
					<p class="text-white get_started_font get_started_3">We also help you market your products through an online marketplace.</p>
				</div>
				<div class="col-lg-3 col-md-3 col-12 mt-5 chat_with_us_btn">
					<a href="http://wa.link/v4hygf" target="_blank" class="btn btn-chatgreen btn-block btn-lg" style="border-radius: 50px;"> Chat with Us</a>
				</div>
			</div>
			<div class="row justify-content-center mt-2 mb-5">
				<div class="col-lg-3 col-md-3 col-6 mt-3 mb-3">
					<i class="fa fa-circle text-info" style="font-size: 50px;z-index: 1;position: relative;"></i><i class="fa fa-file-text-o text-white" style="font-size: 30px;z-index: 2;position: absolute;margin-top: 8px;margin-left: -33px;"></i>
					<p class="text-white text-capitalize get_started_content">Fill up contact form</p>
				</div>
				<div class="col-lg-3 col-md-3 col-6 mt-3 mb-3">
					<i class="fa fa-circle" style="font-size: 50px;z-index: 1;position: relative;color:#26D367;"></i>
					<i class="fa fa-phone text-white" style="font-size: 30px;z-index: 2;position: absolute;margin-top: 10px;margin-left: -32px;"></i>
					<!-- <img src="{{asset('frontend/assets/ui/Process Application-icon.svg')}}" alt="Process Application-icon" style="font-size: 30px;z-index: 2;position: absolute;margin-top: 8px;margin-left: -35px;"> -->
					<p class="text-white text-capitalize get_started_content">Expert will call you</p>
				</div>
				<div class="col-lg-3 col-md-3 col-6 mt-3 mb-3">
					<i class="fa fa-circle" style="font-size: 50px;z-index: 1;position: relative;color:#25C1D7;"></i>
					<img src="{{asset('frontend/assets/ui/Payment-icon.svg')}}" alt="Payment-icon" style="font-size: 30px;z-index: 2;position: absolute;margin-top: 8px;margin-left: -35px;">

					<p class="text-white text-capitalize get_started_content">Make online payment</p>
				</div>
				<div class="col-lg-3 col-md-3 col-6 mt-3 mb-3">
					<i class="fa fa-circle" style="font-size: 50px;z-index: 1;position: relative;color:#FBBC04;"></i><i class="fa fa-laptop text-white" style="font-size: 30px;z-index: 2;position: absolute;margin-top: 8px;margin-left: -37px;"></i>
					<p class="text-white text-capitalize get_started_content">Start Working</p>
				</div>
			</div>
		</div>
	</section><section id="startups_trust_us" class="mt-2 mb-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 col-md-12 col-12 mt-5">
					<h2 class="text-center font-weight-bolder fino-font-size text-capitalize">500+ Startups Trust Us</h2>
				</div>
				<div class="col-lg-12 col-md-12 col-12 startups_trust_us_1">
					<div id="blogCarousals" class="carousel slide" data-ride="carousel">
						<!-- <ol class="carousel-indicators">
							<li data-target="#blogCarousal" data-slide-to="0" class="active"></li>
							<li data-target="#blogCarousal" data-slide-to="1"></li>
							<li data-target="#blogCarousal" data-slide-to="2"></li>
						</ol> -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="row justify-content-center mt-5">
									<div class="col-lg-2 col-md-2 col-12">
										<img src="{{asset('frontend/assets/ui/1-wheelseye-logo.png')}}" alt="1-wheelseye-logo" class="img-fluid" width="100%" style="height: 60px;">
									</div>
									<div class="col-lg-2 col-md-2 col-12">
										<img src="{{asset('frontend/assets/ui/2-farmor-logo.svg')}}" alt="2-farmor-logo" class="img-fluid" width="100%" style="height: 60px;">
									</div>
									<div class="col-lg-2 col-md-2 col-12">
										<img src="{{asset('frontend/assets/ui/2-shadowfax-logo.png')}}" alt="2-shadowfax-logo" class="img-fluid" width="100%" style="height: 90px;">
									</div>
									<div class="col-lg-2 col-md-2 col-12">
										<img src="{{asset('frontend/assets/ui/3-damensch-logo.png')}}" alt="3-damensch-logo" class="img-fluid" width="100%" style="height: 60px;">
									</div>
									<div class="col-lg-2 col-md-2 col-12">
										<img src="{{asset('frontend/assets/ui/3-Gromo-logo.svg')}}" alt="3-Gromo-logo" class="img-fluid" width="100%" style="height: 60px;">
									</div>
									<div class="col-lg-2 col-md-2 col-12">
										<img src="{{asset('frontend/assets/ui/4-affordplan-logo.png')}}" alt="4-affordplan-logo" class="img-fluid" width="100%" style="height: 90px;">
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row justify-content-center mt-5">
									<div class="col-lg-2 col-md-2 col-12">
										<img src="{{asset('frontend/assets/ui/4-boyo-logo.svg')}}" alt="4-boyo-logo" class="img-fluid" width="100%" style="height: 60px;">
									</div>
									<div class="col-lg-2 col-md-2 col-12">
										<img src="{{asset('frontend/assets/ui/5-vigrow-logo.svg')}}" alt="5-vigrow-logo" class="img-fluid" width="100%" style="height: 60px;">
									</div>
									<div class="col-lg-2 col-md-2 col-12">
										<img src="{{asset('frontend/assets/ui/6-Dukaanse-logo.svg')}}" alt="6-Dukaanse-logo" class="img-fluid" width="100%" style="height: 60px;">
									</div>
									<div class="col-lg-2 col-md-2 col-12">
										<img src="{{asset('frontend/assets/ui/8-Oye-logo.png')}}" alt="8-Oye-logo" class="img-fluid" width="100%" style="height: 60px;">
									</div>
									<div class="col-lg-2 col-md-2 col-12">
										<img src="{{asset('frontend/assets/ui/9-leegality-logo.png')}}" alt="9-leegality-logo" class="img-fluid" width="100%" style="height: 90px;">
									</div>
									<div class="col-lg-2 col-md-2 col-12">
										<img src="{{asset('frontend/assets/ui/10-shaadisaga.logo.png')}}" alt="10-shaadisaga.logo" class="img-fluid" width="100%" style="height: 90px;">
									</div>
								</div>
							</div>
						</div>
						<!-- <a class="carousel-control-prev" href="#blogCarousal" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#blogCarousal" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a> -->
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-12 startups_trust_us_2">
					<div id="blogCarousals" class="carousel slide" data-ride="carousel">
						<!-- <ol class="carousel-indicators">
							<li data-target="#blogCarousal" data-slide-to="0" class="active"></li>
							<li data-target="#blogCarousal" data-slide-to="1"></li>
							<li data-target="#blogCarousal" data-slide-to="2"></li>
						</ol> -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="row justify-content-center mt-5">
									<div class="col-lg-12 col-md-12 col-12">
										<img src="{{asset('frontend/assets/ui/1-wheelseye-logo.png')}}" alt="1-wheelseye-logo" class="img-fluid mob_carousel" style="height: 60px; width: 100%;">
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row justify-content-center mt-5">
									<div class="col-lg-12 col-md-12 col-12">
										<img src="{{asset('frontend/assets/ui/2-farmor-logo.svg')}}" alt="2-farmor-logo" class="img-fluid mob_carousel" style="height: 60px;">
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row justify-content-center mt-5">
									<div class="col-lg-12 col-md-12 col-12">
										<img src="{{asset('frontend/assets/ui/2-shadowfax-logo.png')}}" alt="2-shadowfax-logo" class="img-fluid mob_carousel" style="height: 90px;">
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row justify-content-center mt-5">
									<div class="col-lg-12 col-md-12 col-12">
										<img src="{{asset('frontend/assets/ui/3-damensch-logo.png')}}" alt="3-damensch-logo" class="img-fluid mob_carousel" style="height: 60px;">
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row justify-content-center mt-5">
									<div class="col-lg-12 col-md-12 col-12">
										<img src="{{asset('frontend/assets/ui/2-shadowfax-logo.png')}}" alt="2-shadowfax-logo" class="img-fluid mob_carousel" style="height: 90px;">
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row justify-content-center mt-5">
									<div class="col-lg-12 col-md-12 col-12">
										<img src="{{asset('frontend/assets/ui/3-damensch-logo.png')}}" alt="3-damensch-logo" class="img-fluid mob_carousel" style="height: 60px;">
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row justify-content-center mt-5">
									<div class="col-lg-12 col-md-12 col-12">
										<img src="{{asset('frontend/assets/ui/3-Gromo-logo.svg')}}" alt="3-Gromo-logo" class="img-fluid mob_carousel" width="100%" style="height: 60px;">
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row justify-content-center mt-5">
									<div class="col-lg-12 col-md-12 col-12">
										<img src="{{asset('frontend/assets/ui/4-affordplan-logo.png')}}" alt="4-affordplan-logo" class="img-fluid mob_carousel" width="100%" style="height: 90px;">
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row justify-content-center mt-5">
									<div class="col-lg-12 col-md-12 col-12">
										<img src="{{asset('frontend/assets/ui/4-boyo-logo.svg')}}" alt="4-boyo-logo" class="img-fluid mob_carousel" width="100%" style="height: 60px;">
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row justify-content-center mt-5">
									<div class="col-lg-12 col-md-12 col-12">
										<img src="{{asset('frontend/assets/ui/5-vigrow-logo.svg')}}" alt="5-vigrow-logo" class="img-fluid mob_carousel" width="100%" style="height: 60px;">
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row justify-content-center mt-5">
									<div class="col-lg-12 col-md-12 col-12">
										<img src="{{asset('frontend/assets/ui/6-Dukaanse-logo.svg')}}" alt="6-Dukaanse-logo" class="img-fluid mob_carousel" width="100%" style="height: 60px;">
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row justify-content-center mt-5">
									<div class="col-lg-12 col-md-12 col-12">
										<img src="{{asset('frontend/assets/ui/8-Oye-logo.png')}}" alt="8-Oye-logo" class="img-fluid mob_carousel" width="100%" style="height: 60px;">
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row justify-content-center mt-5">
									<div class="col-lg-12 col-md-12 col-12">
										<img src="{{asset('frontend/assets/ui/9-leegality-logo.png')}}" alt="9-leegality-logo" class="img-fluid mob_carousel" width="100%" style="height: 90px;">
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row justify-content-center mt-5">
									<div class="col-lg-12 col-md-12 col-12">
										<img src="{{asset('frontend/assets/ui/10-shaadisaga.logo.png')}}" alt="10-shaadisaga.logo" class="img-fluid mob_carousel" width="100%" style="height: 90px;">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><section id="award_winning" class="mt-2 mb-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 col-md-12 col-12 mt-5">
					<center>
					<i class="fa fa-star" style="color:#FBBC05;font-size:38px;"></i>
					<i class="fa fa-star" style="color:#FBBC05;font-size:38px;"></i>
					<i class="fa fa-star" style="color:#FBBC05;font-size:38px;"></i>
					<i class="fa fa-star" style="color:#FBBC05;font-size:38px;"></i>
					<i class="fa fa-star" style="color:#FBBC05;font-size:38px;"></i>
					</center>
					<h2 class="text-center font-weight-bolder fino-font-size text-capitalize mt-4 finofonth">Our Achievements</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="card shadow" style="border-radius: 10px;">
						<div class="card-body bg-white">
							<center><img src="{{asset('frontend/assets/ui/V-CFOAwards-img 1.png')}}" alt="V-CFOAwards-img 1" class="img-fluid"></center>
							<h6 class="text-center text-capitalize font-weight-bolder mt-3 finofonth">Best Virtual CFO of the year 2023</h6>

						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="card shadow" style="border-radius: 10px;">
						<div class="card-body bg-white">
							<center><img src="{{asset('frontend/assets/ui/legal-compliance- award-img.png')}}" alt="legal-compliance-award" class="img-fluid"></center>
							<h6 class="text-center text-capitalize font-weight-bolder mt-3 finofonth">Best Tax & Legal Compliance Management Agency</h6>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="card shadow" style="border-radius: 10px;">
						<div class="card-body bg-white">
							<center><img src="{{asset('frontend/assets/ui/financial-advisor-award-img.png')}}" alt="financial-advisor-award" class="img-fluid"></center>
							<h6 class="text-center text-capitalize font-weight-bolder mt-3 finofonth">Best Financial Advisor Agency at the World Startup Convention'23</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section></section><section id="prg-counter">
    <div class="container">
        <div class="prg-container row">

            <div class="col-md-12">
                <h2>10+ years of success</h2>
                <p>suraj is working with Startups since last 10 years with an unparalleled experience of helping fast growing startups. Our Success can be witnessed through the numbers given below.</p>
            </div>
            <div class="col-md-12 mobile_block">
                <img src="{{asset('frontend/assets/images/counter_img_mob.jpg')}}">
            </div>
            <div class="col-md-12 desk_none">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-item">
                            <div class="counter-inner mt-tp">
                                <h3 class="prg-count" data-count="500">0</h3>
                                <h4 class="prg-count-title">Startups</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-item">
                            <div class="counter-inner mt-tp2">
                                <h3 class="prg-count" data-count="8000">0</h3>
                                <h4 class="prg-count-title">Projects Completed</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-item">
                            <div class="counter-inner mt-tp3">
                                <h3 class="prg-count" data-count="4">0</h3>
                                <h4 class="prg-count-title">Office Location</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-item">
                            <div class="counter-inner mt-tp4">
                                <h3 class="prg-count" data-count="98">0</h3>
                                <h4 class="prg-count-title">Client Retention</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><section class="startup about-testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="title">
					<h2>Startup eco-system loves to talk about us!</h2>
				</div>
			</div>
		</div>
		<div class="row common-slider">
			<div class="col-md-12">
				<div class="white-bg">
					<h4>Timely Execution of work</h4>
					<p>suraj is managing my accounts and its such a relaxed and smooth journey so far , I dont have to worry about timely execution of the work . They manage my invoicing, finances and compliances in a efficient way. I wish karan and team all the very best for the future of this startup .</p>
					<div class="row mt-4">
						<div class="col-md-8">
							<div class="user-item">
								<img class="user" src="{{asset('frontend/assets/images/Ishant-Sharma.jpg')}}">
								<h3>Ishant Sharma <span>Indian Cricketer</span></h3>
							</div>
						</div>
						<!-- <div class="col-md-4"><img class="c-logo" src="{{asset('frontend/images/client1.jpg')}}"></div> -->
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="white-bg">
					<h4>On the call Solutions for first time founders</h4>
					<p>suraj provided Shadowfax with an end to end support in managing compliance and accounts during our early stage and helped us transition to a full fledged finance team post our multiple Venture rounds of Capital. Highly recommended for first time founders who are looking for on-the-call solutions for specialized accounting, taxation and statutory compliances.</p>
					<div class="row mt-4">
						<div class="col-md-8">
							<div class="user-item">
								<img class="user" src="{{asset('frontend/assets/images/bansal-img.jpg')}}">
								<h3>Abhishek Bansal <span>CEO, ShadowFax</span></h3>
							</div>
						</div>
						<div class="col-md-4"><img class="c-logo" src="{{asset('frontend/assets/images/logo1.jpg')}}"></div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="white-bg">
					<h4>Highly Responsive and truly understand issues faced by startup</h4>
					<p>I have been working with suraj on a couple of our portfolio companies. I have found this team highly responsive and they truly understand issues faced by startups. I would highly recommend them to startups for their accounting and compliance needs.</p>
					<div class="row mt-4">
						<div class="col-md-8">
							<div class="user-item">
								<img class="user" src="{{asset('frontend/assets/images/Sarbvir-Singh.jpg')}}">
								<h3>Sarbvir Singh <span>CEO-PolicyBazaar, <br>Ex Managing Partner-WaterBridge Ventures</span></h3>
							</div>
						</div>
						<div class="col-md-4"><img class="c-logo" src="{{asset('frontend/assets/images/logo8.jpg')}}"></div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="white-bg">
					<h4>Easily able to distill the problem and provide the solutions to founders</h4>
					<p>I have been working with Karan and team with a long time now. Karan’s thought of clarity is remarkable. He is very easily able to distill the problem and provide a solution which suits everyone needs. Would highly recommend others to explore services provided by Karan and his team at suraj.</p>
					<div class="row mt-4">
						<div class="col-md-8">
							<div class="user-item">
								<img class="user" src="{{asset('frontend/assets/images/Kshitij-Puri.jpg')}}">
								<h3>Kshitij Puri <span>CEO- Ziploan</span></h3>
							</div>
						</div>
						<div class="col-md-4"><img class="c-logo" src="{{asset('frontend/assets/images/logo14.jpg')}}"></div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="white-bg">
					<h4>Compliance of US and India entirely handled by suraj</h4>
					<p>Team FINO has been there with us since we began our journey 5 years back..the reason for our long lasting relationship was the trust that the Fino team members reciprocated. Compliance of both our USA and India entity are handled by them. I’d highly recommend suraj to early stage startups”</p>
					<div class="row mt-4">
						<div class="col-md-8">
							<div class="user-item">
								<img class="user" src="{{asset('frontend/assets/images/Kush-Beejal.jpg')}}">
								<h3>Kush Beejal <span>CEO- NeoStencil</span></h3>
							</div>
						</div>
						<div class="col-md-4"><img class="c-logo" src="{{asset('frontend/assets/images/logo16.jpg')}}"></div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="white-bg">
					<h4>Fast Turnaround time and deep understanding of the business</h4>
					<p>suraj team are one of the most friendly people to work. They have a deep understanding of the business and help us with all our financial work without any hassles. Add to that a fast turnaround time for any task- they are one of the best start up accounting firms in the market!</p>
					<div class="row mt-4">
						<div class="col-md-8">
							<div class="user-item">
								<img class="user" src="{{asset('frontend/assets/images/Utkarsh-Kawatra.jpg')}}">
								<h3>Utkarsh Kawatra <span>CEO- myHQ</span></h3>
							</div>
						</div>
						<div class="col-md-4"><img class="c-logo" src="{{asset('frontend/assets/images/logo4.jpg')}}"></div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="white-bg">
					<h4>Startup Founder friendly</h4>
					<p>I have been working with suraj for last 5 years and I really like the way they works. suraj helps Truelancer from its very beginning for all of its financial and legal aspects and turnaround the things quickly. This firm is a truly a Startup Founder friendly.</p>
					<div class="row mt-4">
						<div class="col-md-8">
							<div class="user-item">
								<img class="user" src="{{asset('frontend/assets/images/Dipesh-Garg.jpg')}}">
								<h3>Dipesh Garg <span>CEO- Truelancer</span></h3>
							</div>
						</div>
						<div class="col-md-4"><img class="c-logo" src="{{asset('frontend/assets/images/logo5.jpg')}}"></div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="white-bg">
					<h4>DNA Tuned perfect for Startups</h4>
					<p>We have been working with Karan and suraj for a long time now. The entire DNA of the firm is tuned perfectly for startups. The support which you get from them at the time of crisis really differentiates them from everyone else in the market. Karan is a master of his domain.Highly recommended from our side</p>
					<div class="row mt-4">
						<div class="col-md-8">
							<div class="user-item">
								<img class="user" src="{{asset('frontend/assets/images/Gaurav-Pushkar--Damensch.jpg')}}">
								<h3>Gaurav Pushkar <span>CEO- Damensch</span></h3>
							</div>
						</div>
						<div class="col-md-4"><img class="c-logo" src="{{asset('frontend/assets/images/dam-small-logo.jpg')}}"></div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="white-bg">
					<h4>Services through efficient and Control Platform</h4>
					<p>The very foundation of a suraj is laid down by the founding member of it. Mr. Karan is a great person and getting to know that he is floating his own startup got me really excited. I really love the services offered by suraj and now getting these services through a more efficient and controlled platform is going to be truly amazing.</p>
					<div class="row mt-4">
						<div class="col-md-8">
							<div class="user-item">
								<img class="user" src="{{asset('frontend/assets/images/Mohit-Sharma.jpg')}}">
								<h3>Mohit Sharma <span>CEO- Oye Rickshaw</span></h3>
							</div>
						</div>
						<div class="col-md-4"><img class="c-logo" src="{{asset('frontend/assets/images/logo2.jpg')}}"></div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="white-bg">
					<h4>unparalleled experience in helping fast growing startups</h4>
					<p>suraj team has an unparalleled experience in helping fast growing startups right from their inception to later stage rounds. suraj helped Leegality for all the financial and legal matters. Highly recommended and all the best!</p>
					<div class="row mt-4">
						<div class="col-md-8">
							<div class="user-item">
								<img class="user" src="{{asset('frontend/assets/images/Shivam-Singla.jpg')}}">
								<h3>Shivam Singla <span>CEO- Leegality</span></h3>
							</div>
						</div>
						<div class="col-md-4"><img class="c-logo" src="{{asset('frontend/assets/images/logo11.jpg')}}"></div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="white-bg">
					<h4>Good knowledge of Tax and Labour law compliance</h4>
					<p>We worked with Deepak from suraj and the experience has been fantastic. They have good knowledge about Tax compliance and Labour law compliance.This firm is highly recommended for Startup world</p>
					<div class="row mt-4">
						<div class="col-md-8">
							<div class="user-item">
								<img class="user" src="{{asset('frontend/assets/images/Tanuj-Gangwani.jpg')}}">
								<h3>Tanuj Gangwani <span>Head Finance- Wheelseye</span></h3>
							</div>
						</div>
						<div class="col-md-4"><img class="c-logo" src="{{asset('frontend/assets/images/logo10.jpg')}}"></div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="white-bg">
					<h4>suraj takes the ownership of work</h4>
					<p>We have been working Karan and suraj team for almost 5 years now. In any startup legal and financial work takes huge time and the way Karan takes the ownership of the work, as a founder you are able to save lot of time and be tension free. Highly recommended.</p>
					<div class="row mt-4">
						<div class="col-md-8">
							<div class="user-item">
								<img class="user" src="{{asset('frontend/assets/images/Himanshu-Kapsime.jpg')}}">
								<h3>Himanshu Kapsime <span>CEO ShaadiSaga</span></h3>
							</div>
						</div>
						<div class="col-md-4"><img class="c-logo" src="{{asset('frontend/assets/images/logo15.jpg')}}"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection