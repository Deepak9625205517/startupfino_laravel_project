<!DOCTYPE html>
	<html lang="en">
	<head>		
	  <title>Startup Fino</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="description" content="">
	  <meta name="keywords" content="">
	  <meta name="title" content="">

	  <meta property="og:title" content=""/>
	  <meta property="og:type" content="website">
	  <meta property="og:url" content="services/virtual-cfo-services" />
	  <meta property="og:description" content="" />
	  <meta property="og:site_name" content="Startup Fino" />
	  <meta property="og:image" content="" />
	  <meta property="og:image:type" content="image/" />
	  <meta property="og:image:alt" content="" />

	  <link rel="canonical"  href="services/virtual-cfo-services">
	  <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.ico')}}" type="image/x-icon">
	  <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.ico')}}" type="image/x-icon">

		<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/font-awesome.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/animate.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/slick.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}">
		<link type="text/css" rel="stylesheet" href="{{asset('frontend/assets/css/media.css')}}" />
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
		


	</head>

	<body class="bg-white">
		<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHPVGZX"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
		<!-- <div id="loading">
		<img id="loading-image" src="{{asset('frontend/assets/images/480px-Loader.gif')}}" alt="Loading..." />
	  </div> -->
		@include('frontend.layouts.header')
		@yield('content')
		@include('frontend.layouts.footer')

		<!-- Model -->
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
		
	</style>
	
		<!-- End Model -->
	<link rel="stylesheet"
		href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css"
		type="text/css" />
	<!-- jQuery library -->
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
		<meta name="google-signin-client_id" content="121439696121-qjuri7mtfqs4h0980j026hradb8jrurr.apps.googleusercontent.com">
		<script type="text/javascript">
			var SITE_URL = 'http://localhost/';
			var SITE_IMAGES = 'assets/images/';
			var ACTIVE_ICON = '<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>';
			var DEACTIVE_ICON = '<label class="switch"><input type="checkbox"><span class="slider round"></span></label>';
			var SERVICE = 'virtual-cfo-services';
		</script>
		<!--<script src="{{asset('frontend/assets/js/tiny-slider.js')}}"></script>
		<script src="js/jquery.validate.js"></script>-->
		<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-9QL4F7J0X9"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-9QL4F7J0X9');
	</script>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171595342-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-171595342-1');
	</script>
		
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
	<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
	<script src="https://rawgit.com/moagrius/isOnScreen/master/jquery.isonscreen.min.js"></script>
	<script src="{{asset('frontend/assets/js/animate.js')}}"></script>
	<script src="{{asset('frontend/assets/js/parallax.js')}}"></script>
	<script src="{{asset('frontend/assets/js/scrollReveal.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/slick.js')}}"></script>
	<script src="{{asset('frontend/assets/js/custom.js')}}"></script>
	<!-- <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script> 
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11" async defer></script>-->

	<script>
	$(document).on('click', function() {
		$(".search-bar").css('display', 'none');
	});
	var serviceArr = [{"value":"http://localhost/services/testing","label":"Testing"},{"value":"http://localhost/services/virtual-cfo-services","label":"Virtual CFO Services"},{"value":"http://localhost/services/epf-and-esic-registration-surrender","label":"EPF and ESIC Registration Surrender"},{"value":"http://localhost/services/closing-limited-liability-partnership","label":"Closing Limited Liability Partnership"},{"value":"http://localhost/services/closing-partnership-firm","label":"Closing Partnership Firm"},{"value":"http://localhost/services/closing-private-limited-company","label":"Closing Private Limited Company"},{"value":"http://localhost/services/pantan-surrender","label":"PAN/TAN Surrender"},{"value":"http://localhost/services/third-party-payroll-services-offrole","label":"Third Party Payroll Services (Offrole)"},{"value":"http://localhost/services/payroll-management-services","label":"Payroll Management Services"},{"value":"http://localhost/services/mis-reporting","label":"MIS Reporting"},{"value":"http://localhost/services/investor-reporting","label":"Investor Reporting"},{"value":"http://localhost/services/seismeis-refunds","label":"SEIS/MEIS Refunds"},{"value":"http://localhost/services/gst-refunds","label":"GST Refunds"},{"value":"http://localhost/services/labour-law-compliance","label":"Labour Law Compliance"},{"value":"http://localhost/services/secretarial-roc-compliance","label":"Secretarial (ROC) Compliance"},{"value":"http://localhost/services/valuation-certificate","label":"Valuation Certificate"},{"value":"http://localhost/services/professional-tax-compliance","label":"Professional Tax Compliance"},{"value":"http://localhost/services/esic-compliance","label":"ESIC Compliance"},{"value":"http://localhost/services/epf-compliance","label":"EPF Compliance"},{"value":"http://localhost/services/accounts-receivable-services","label":"Accounts Receivable Management"},{"value":"http://localhost/services/accounts-payable-services","label":"Accounts Payable Management"},{"value":"http://localhost/services/gst-compliance","label":"GST Compliance"},{"value":"http://localhost/services/accounting-services","label":"Accounting Services"},{"value":"http://localhost/services/rocannual-auditing-compliance","label":"ROC/Annual Auditing Compliance"},{"value":"http://localhost/services/tds-compliance","label":"TDS Compliance"},{"value":"http://localhost/services/income-tax-compliance","label":"Income Tax Compliance"},{"value":"http://localhost/services/change-of-registered-office-adress","label":"Change of Registered Office Adress"},{"value":"http://localhost/services/mudra-loan","label":"Mudra Loan"},{"value":"http://localhost/services/fundraising-vcs-hnis","label":"Fundraising VCs/HNIs"},{"value":"http://localhost/services/other-hr-policies","label":"Other HR Policies"},{"value":"http://localhost/services/transfer-pricing-agreeement","label":"Transfer Pricing Agreeement"},{"value":"http://localhost/services/non-disclosure-agreement","label":"Non Disclosure Agreement"},{"value":"http://localhost/services/due-diligence","label":"Due Diligence"},{"value":"http://localhost/services/founders-agreement","label":"Founders Agreement"},{"value":"http://localhost/services/term-sheet-shareholders-agreement","label":"TermSheet/Shareholders Agreement"},{"value":"http://localhost/services/startup-grant-sloans","label":"Startup grants/loans"},{"value":"http://localhost/services/esop-policy","label":"ESOP Policy"},{"value":"http://localhost/services/privacy-policy","label":"Privacy Policy"},{"value":"http://localhost/services/terms-of-use","label":"Terms of Use"},{"value":"http://localhost/services/customervendor-agreement","label":"Customer/Vendor Agreement"},{"value":"http://localhost/services/employment-agreement","label":"Employment Agreement"},{"value":"http://localhost/services/patent-registration","label":"Patent Registration"},{"value":"http://localhost/services/trademark-objection","label":"Trademark Objection"},{"value":"http://localhost/services/trademark-registration","label":"Trademark Registration"},{"value":"http://localhost/services/copyright-registration","label":"Copyright Registration"},{"value":"http://localhost/services/trademark-assignment","label":"Trademark Assignment"},{"value":"http://localhost/services/dubai-company-incorporation","label":"Dubai Incorporation"},{"value":"http://localhost/services/singapore-company-incorporation","label":"Singapore Incorporation"},{"value":"http://localhost/services/us-company-incorporation","label":"US Incorporation"},{"value":"http://localhost/services/esi-registration","label":"ESI Registration"},{"value":"http://localhost/services/epf-registration","label":"EPF Registration"},{"value":"http://localhost/services/fcra-registration","label":"FCRA Registration"},{"value":"http://localhost/services/clra-license","label":"CLRA License"},{"value":"http://localhost/services/iso-certification","label":"ISO Certification"},{"value":"http://localhost/services/sepc-license","label":"SEPC License"},{"value":"http://localhost/services/startup-india-registration","label":"Startup India"},{"value":"http://localhost/services/psara-license","label":"PSARA License"},{"value":"http://localhost/services/drug-license","label":"Drug License"},{"value":"http://localhost/services/dot-osp-license","label":"DOT (OSP)"},{"value":"http://localhost/services/udyog-aadhar-msme-registration","label":"Udyog Aadhar (MSME) "},{"value":"http://localhost/services/import-export-code-iec-registration","label":"Import Export Code (IEC)"},{"value":"http://localhost/services/shop-establishment-registration","label":"Shop & Establishment "},{"value":"http://localhost/services/fssai-food-licence","label":"FSSAI (Food Licence)"},{"value":"http://localhost/services/professional-tax-registration","label":"Professional Tax"},{"value":"http://localhost/services/12a-and-80g-registration","label":"12A/80G (NGO) "},{"value":"http://localhost/services/gst-registration","label":"GST"},{"value":"http://localhost/services/how-to-apply-for-a-pan-card","label":"PAN/TAN Application"},{"value":"http://localhost/services/nbfc-registration","label":"NBFC "},{"value":"http://localhost/services/nidhi-company-registration","label":"Nidhi Company"},{"value":"http://localhost/services/society-registration","label":"Society (NGO)"},{"value":"http://localhost/services/trust-registration","label":"Trust (NGO)"},{"value":"http://localhost/services/section-8-company-registration","label":"Section 8 Company (NGO)"},{"value":"http://localhost/services/foreign-subsidiary-company-registration","label":"Foreign Subsidiary"},{"value":"http://localhost/services/sole-properitorship-firm-registration","label":"Proprietorship Firm"},{"value":"http://localhost/services/partnership-firm-registration","label":"Partnership Firm"},{"value":"http://localhost/services/one-person-company-opc-registration","label":"One Person Company"},{"value":"http://localhost/services/company-registration","label":"Private Limited Incorporation"},{"value":"http://localhost/services/limited-liability-partnership-llp-registration","label":"Limited Liability Partnership (LLP)"}];
	$('#autosearch').keyup(function() {
		var value = $('#autosearch').val();
		if (value == '') {
			//  $("#matchKey").show();
			$(".search-bar").css('display', 'block');
		} else {
			$('.autosearch').autocomplete({
				source: serviceArr,
				select: function(event, ui) {
					window.location.href = ui.item.value;
				}
			});
			//  $("#matchKey").hide();
			$(".search-bar").css('display', 'none');
		}
	});
	$("#autosearch").on("click", function() {
		if (!$('#autosearch').val().length) {
			setTimeout(() => {
				$(".search-bar").css('display', 'block');
			}, 10);
		} else {
			$(".search-bar").css('display', 'none');
		}
	});

	// $(function() {
	// 	$('.autosearch').autocomplete({
	// 		source: serviceArr,
	// 		select: function(event, ui) {
	// 			window.location.href = ui.item.value;
	// 		}
	// 	});
	// });

	window.sr = new scrollReveal();
	/*function on() {
	  document.getElementById("overlay").style.display = "block";
	}*/

	/*function off() {
	  document.getElementById("overlay").style.display = "none";
	}*/
	$('.banner').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		arrows: true,
		dots: true,
		autoplaySpeed: 10000
	});
	$(".center").slick({
		dots: false,
		infinite: true,
		centerMode: true,
		centerPadding: '150px',
		slidesToShow: 1,
		slidesToScroll: 1,
		// adaptiveHeight: true,
		responsive: [{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				centerPadding: '0',
				slidesToScroll: 1
			}
		}]
	});

	$('.testimonial-slider').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		autoplay: true,
		arrows: false,
		dots: false,
		autoplaySpeed: 10000,
		responsive: [{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}]
	});
	$('.related-slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		arrows: false,
		dots: false,
		autoplaySpeed: 10000,
		responsive: [{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}]
	});
	$('.client-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		arrows: false,
		dots: true,
		infinite: true,
		autoplaySpeed: 1000,
		responsive: [{
			breakpoint: 767,
			settings: {
				slidesToShow: 2,
				centerMode: true,
				dots:false,
				slidesToScroll: 1
			}
		}]
	});
	$('.client-logo-slider').slick({
		slidesToShow: 5,
		autoplay: true,
		autoplaySpeed: 1000,
		arrows: false,
		dots: false,
	});
	$('.compassion-slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		arrows: true,
		dots: false,
		autoplaySpeed: 10000,
		responsive: [{
			breakpoint: 767,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			},
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}]
	});
	$('.common-slider').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		autoplay: true,
		arrows: true,
		dots: false,
		autoplaySpeed: 10000,
		responsive: [{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}]
	});

	$('.nav-tabs-dropdown').on("click", "li:not('.active') a", function(event) {
		$(this).closest('ul').removeClass("open");
	}).on("click", "li.active a", function(event) {
		$(this).closest('ul').toggleClass("open");
	});

	$(document).ready(function() {
		$(window).resize(function() {
			if ($(window).width() >= 980) {
				$(".navbar .dropdown-toggle").hover(function() {
					$(this).parent().toggleClass("show");
					$(this).parent().find(".dropdown-menu").toggleClass("show");
				});
				$(".navbar .dropdown-menu").mouseleave(function() {
					$(this).removeClass("show");
				});
			}
		});
	});
	$('.service-slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		arrows: true,
		dots: false,
		autoplaySpeed: 10000,
		responsive: [{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});


	$(document).ready(function() {


		// var data = checkDisplay();
		// checkDisplay();

		$(window).on('resize scroll', function() {
			checkDisplay();
		});
	});

	var interval = setInterval(() => {
		checkDisplay();
	}, 100);

	function checkDisplay() {
		$('.prg-count').each(function() {
			var $this = $(this);
			if ($this.isOnScreen()) {
				var countTo = $this.attr('data-count');
				$({
					countNum: $this.text()
				}).animate({
					countNum: countTo
				}, {
					duration: 300,
					easing: 'linear',
					step: function() {
						$this.text(Math.floor(this.countNum));
					},
					complete: function() {
						$this.text(this.countNum);
						//alert('finished');
						clearInterval(interval); // stop the interval
					}
				});
			}
		});
	}

	// $(function() {
	//     $('a[href^="#"]').on('click', function(event) {
	//         var target = $(this.getAttribute('href'));
	//         if (target.length) {
	//             event.preventDefault();
	//             $('html, body').stop().animate({
	//                 scrollTop: target.offset().top
	//             }, 1000);
	//         }
	//     });
	// });

	$(".tabclass").click(function() {
		var tabId = $(this).attr('data-tab');
		$(".formBlock").removeClass("active");
		$(this).addClass("active");
		$("#" + tabId).addClass("active");

		dynHeight = $(".formBlock.active").height() + 39;
		$(".formPage").animate({
			"min-height": dynHeight
		}, 300);

	});

	$.fn.responsiveTabs = function() {
		var container = this;
		container.on('show.bs.collapse', '.panel-collapse', function() {
			$(this).addClass('active').siblings('.panel-collapse').removeClass('active').collapse('hide');
			container.find('.nav-tabs a[href="#' + $(this).attr('id') + '"]').parent().addClass('active')
				.siblings().removeClass('active');
		}).on('show.bs.tab', '.nav-tabs a', function() {
			$($(this).attr('href')).addClass('in').siblings('.tab-pane').removeClass('in');
		});
	};

	// Instanciation
	$(document).ready(function() {
		$('.responsive-tabs').responsiveTabs();
	});

	function myFunction() {
		var x = document.getElementById('myDIV');
		if (x.style.display === 'block') {
			x.style.display = 'none';
		} else {
			x.style.display = 'block';
		}
	}
	var acc = document.getElementsByClassName("ar1");
	var i;
	for (i = 0; i < acc.length; i++) {
		acc[i].onclick = function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight) {
				panel.style.maxHeight = null;
			} else {
				panel.style.maxHeight = panel.scrollHeight + "px";
			}
		}
	}
	</script>
	<script>
	$(document).ready(function() {
		updateActiveClassesOnScroll();

		$('.service-link ul li a').click(function() {
			$('.service-link ul li a.active').removeClass("active");
			$(this).addClass("active");
		});
	});
	$(function() {
		$('.search').click(function() {
			$(this).closest('.searcha-area').toggleClass('is-close');
		});
	});
	$(document).ready(function() {
		$(".search").click(function() {
			$(".search-bar").toggle();
		});
	});

	var ph = "Try Private Limited Company",
		searchBar = $('#search'),
		// placeholder loop counter
		phCount = 0;

	// function to return random number between
	// with min/max range
	function randDelay(min, max) {
		return Math.floor(Math.random() * (max - min + 1) + min);
	}

	// function to print placeholder text in a
	// 'typing' effect
	function printLetter(string, el) {
		// split string into character seperated array
		var arr = string.split(''),
			input = el,
			// store full placeholder
			origString = string,
			// get current placeholder value
			curPlace = $(input).attr("placeholder"),
			// append next letter to current placeholder
			placeholder = curPlace + arr[phCount];

		setTimeout(function() {
			// print placeholder text
			$(input).attr("placeholder", placeholder);
			// increase loop count
			phCount++;
			// run loop until placeholder is fully printed
			if (phCount < arr.length) {
				printLetter(origString, input);
			}
			// use random speed to simulate
			// 'human' typing
		}, randDelay(50, 90));
	}

	// function to init animation
	function placeholder() {
		$(searchBar).attr("placeholder", "");
		printLetter(ph, searchBar);
	}

	placeholder();
	$('.submit').click(function(e) {
		phCount = 0;
		e.preventDefault();
		placeholder();
	});

	$(window).scroll(function(e) {
		updateActiveClassesOnScroll();
	});

	function updateActiveClassesOnScroll() {
		var sticky = $('.formarea'),
			scroll = $(window).scrollTop();

		const last_el = $('.service-content div:first');
		const last_el_bottom = last_el.position().top + last_el.outerHeight(true);
		const secondDivPosition = $('.service-content div:first').children().eq(1).position().top;

		if (scroll >= 500) {
			if (last_el_bottom < scroll) sticky.removeClass('fixed');
			else sticky.addClass('fixed')


			$('.service-content div:first').children().each(function(i) {
				if ($(this).position().top <= scroll - secondDivPosition) {
					$('.service-link ul li a.active').removeClass('active');
					$('.service-link ul li').eq(i).children('a').addClass('active');
				}
			});

		} else {
			sticky.removeClass('fixed');

			$('.service-link ul li a.active').removeClass('active');
			$('.service-link ul li:first').children('a').addClass('active');
		}
	}
	</script>
	<script type="https://www.jqueryscript.net/demo/Bootstrap-Tabs-Accordions-Mobile/accordion.js"></script>
	<script type="text/javascript">
	// $(window).resize(function() {
	// 	location.reload();
	// });
	function getAccordion(element_id, screen) {

		if ($(window).width() < screen) {
			var concat = '';
			obj_tabs = $(element_id + " li").toArray();
			obj_cont = $(".tab-content .tab-pane").toArray();
			jQuery.each(obj_tabs, function(n, val) {
				concat += '<div id="' + n + '" class="panel panel-default">';
				concat += '<div class="panel-heading" role="tab" id="heading' + n + '">';
				concat +=
					'<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse' +
					n + '" aria-expanded="false" aria-controls="collapse' + n + '">' + val.innerText + '</a></h4>';
				concat += '</div>';
				concat += '<div id="collapse' + n +
					'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading' + n + '">';
				concat += '<div class="panel-body">' + obj_cont[n].innerHTML + '</div>';
				concat += '</div>';
				concat += '</div>';
			});
			$("#accordion").html(concat);
			$("#accordion").find('.panel-collapse:first').addClass("in");
			$("#accordion").find('.panel-title a:first').attr("aria-expanded", "true");
			$(element_id).remove();
			$(".tab-content").remove();
		}
	}
	$(document).ready(function() {
		getAccordion("#tabs", 768);
	});
	</script>
	<script>
	var acc = document.getElementsByClassName("ar1");
	var i;

	for (i = 0; i < acc.length; i++) {
		acc[i].onclick = function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight) {
				panel.style.maxHeight = null;
			} else {
				panel.style.maxHeight = panel.scrollHeight + "px";
			}
		}
	}
	</script>
	</script>
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
	var Tawk_API = Tawk_API || {},
		Tawk_LoadStart = new Date();
	(function() {
		var s1 = document.createElement("script"),
			s0 = document.getElementsByTagName("script")[0];
		s1.async = true;
		s1.src = 'https://embed.tawk.to/5ef0b5119e5f6944229112f3/default';
		s1.charset = 'UTF-8';
		s1.setAttribute('crossorigin', '*');
		s0.parentNode.insertBefore(s1, s0);
	})();

	document.addEventListener('DOMContentLoaded', function() {
			var slider = tns({
				"container": '#integrations-slider',
				"items": 5,
					"autoplay": true,
					"speed": 3000,
				"delay": 0,
				"autoplayButton": false,
				"autoplayTimeout": 3000,
				"edgePadding": 100,
				"autoplayButtonOutput": false,
				"controls": false,
				"loop": true,
				"nav": false,
				"mouseDrag": false,
				"responsive": {
					"1600" : {
						"items": 7
					},
					"1350": {
						"items" : 5
					},
					"1200" : {
						"items" : 4
					},
					"768": {
						"items" : 3,
					},
					"600": {
						"items" : 2,
						"edgePadding": 60
					},
					"0" : {
						"items" : 1,
						"edgePadding": 80
					}
				}
			} );
		} );
	</script>
	<script type="text/javascript">
	   if ($(window).width() <= 768)
	   {
		  $('#callus_btn1').removeClass('btn-lg');
		  $('.vcfo_consultation_form,.call_girl_btn,.btn-chatgreen').removeClass('btn-lg');
		  $('.talk_to_an_export').removeClass('btn-lg').addClass('btn-sm');
		  $('.circle-img,.advisory_services_img').hide();
		  $('.overview_heading_large,.virtual-cfo-services-Page-img,.vcfo_service_assist_you,.change_the_way_you_work_1,.how_to_suraj_will_help_you_1,.key_vcfo_services_1,.advisory_services_1,.scan_qr_code,.get_started_1,.startups_trust_us_1').hide();
		  $('.overview_heading_small,.vcfo_assist_you,.change_the_way_you_work_2,.how_to_suraj_will_help_you_2,.key_vcfo_services_2,.advisory_services_2,.get_started_2').show().addClass('text-center');
		  $('.startups_trust_us_2').show();
		  $('.surajQR').removeClass('justify-content-start').addClass('justify-content-center');
		  $('.mob_carousel').addClass('img-thumbnail mx-auto d-block').show();
		  $('.get_started_3').addClass('mt-n3');
		  $('.get_started_2').addClass('mb-3');
		  $('.chat_with_us_btn').removeClass('mt-5').addClass('mt-n2');
		  $('.talk_to_an_export').removeClass('mb-5').addClass('mb-3');
		  $('.overview_large').removeClass('col-lg-8 col-md-8 col-sm-8 col-8').addClass('col-lg-12 col-md-12 col-sm-12 col-12');
		  $('.overview_small').removeClass('col-lg-4 col-md-4 col-sm-4 col-4').addClass('col-lg-12 col-md-12 col-sm-12 col-12');
		  $('.benefit_btn,.list_article,.benefit_btn_1').removeClass('col-lg-6 col-md-6 col-6').addClass('col-lg-12 col-md-12 col-sm-12 col-12');
		}
		else
		{
		  $('#callus_btn1').addClass('btn-lg');
		  $('.vcfo_consultation_form,.call_girl_btn,.btn-chatgreen').addClass('btn-lg');
		  $('.talk_to_an_export').removeClass('btn-sm').addClass('btn-lg');
		  $('.talk_to_an_export').removeClass('mb-3').addClass('mb-5');
		  $('.get_started_3').removeClass('mt-n3');
		  $('.chat_with_us_btn').removeClass('mt-n2').addClass('mt-5');
		  $('.circle-img,.advisory_services_img,.scan_qr_code').show();
		  $('.overview_heading_large,.virtual-cfo-services-Page-img,.vcfo_service_assist_you,.change_the_way_you_work_1,.how_to_suraj_will_help_you_1,.key_vcfo_services_1,.advisory_services_1,.get_started_1,.startups_trust_us_1').show();
		  $('.overview_heading_small,.vcfo_assist_you,.change_the_way_you_work_2,.how_to_suraj_will_help_you_2,.key_vcfo_services_2,.advisory_services_2,.get_started_2,.startups_trust_us_2').hide();
		  $('.surajQR').removeClass('justify-content-center').addClass('justify-content-start');
		  $('.mob_carousel').removeClass('img-thumbnail mx-auto d-block').hide();
		  $('.overview_large').removeClass('col-lg-12 col-md-12 col-sm-12 col-12').addClass('col-lg-8 col-md-8 col-sm-8 col-8');
		  $('.overview_small').removeClass('col-lg-12 col-md-12 col-sm-12 col-12').addClass('col-lg-4 col-md-4 col-sm-4 col-4');
		  $('.benefit_btn,.list_article,.benefit_btn_1').removeClass('col-lg-12 col-md-12 col-sm-12 col-12').addClass('col-lg-6 col-md-6 col-sm-6 col-6');
		};

	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-3V2Z8W2RES"></script>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KHPVGZX');
	<!-- End Google Tag Manager -->
	</script>
	<script type="text/javascript">
			document.getElementById("stars").innerHTML = getStars(4.7);

			function getStars(rating) {

			  // Round to nearest half
			  rating = Math.round(rating * 2) / 2;
			  let output = [];

			  // Append all the filled whole stars
			  for (var i = rating; i >= 1; i--)
				output.push('<i class="fa fa-star" aria-hidden="true" style="color: gold;"></i>&nbsp;');

			  // If there is a half a star, append it
			  if (i == .5) output.push('<i class="fa fa-star-half-o" aria-hidden="true" style="color: gold;"></i>&nbsp;');

			  // Fill the empty stars
			  for (let i = (5 - rating); i >= 1; i--)
				output.push('<i class="fa fa-star-o" aria-hidden="true" style="color: gold;"></i>&nbsp;');

			  return output.join('');

			}
		</script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-3V2Z8W2RES');
	</script>

	</body>

	</html>
