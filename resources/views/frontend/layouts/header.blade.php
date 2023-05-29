<header>
		<div class="top-header" back>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="top-link">
							<ul>
								<li><a href="#">About Us</a> |</li>
								<li><a href="#">Our Client</a> |</li>
								<li>
									<a href="#">Learning Section</a>
								</li>
								<li><a href="#">Contact Us</a></li>
							</ul>
							<div class="top-number">
								<a href="#"><img src="{{asset('frontend/assets/images/top-icon.png')}}" alt="">(011)7777-04508</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-2 col-12">
						<div class="logo">
							<a href="#">
								<img src="{{asset('frontend/assets/images/logo.png')}}" alt="" style="width: 180px;">
							</a>
						</div>
					</div>
					<div class="col-lg-10 col-md-12 col-sm-12 col-12 m-p mr-n2">
						<div class="serach-nav">
							<nav class="nav">
								<div class="nav-bar-h">
									<p><span onclick="myFunction()"> ☰</span></p>
								</div>
								<ul id="myDIV" class="mt-n2">
                                @foreach(parentCategoryWithChield() as $k => $v)
								
									<li>
										@if(count($v->childs) > 0)
										   <a class="menu-main-item">{{$v->name}}</a><span class="ar1">↓</span>
										   <ul class="panel">
											<div class="navmu">
												<li>
													<font class="font"><a href="business_incorporation">Business Incorporation</a></font>
													<ul>
												      @foreach($v->childs as $records)		
														<li>
															<a href="{{route('services', [$records->slug])}}">{{$records->name}}</a>
														</li>
													  @endforeach	
													</ul>
												</li>
											</div>
										</ul>
										@else
										   <a href="{{route('services', [$v->slug])}}" class="menu-main-item text-decoration-none">{{$v->name}}</a>
										@endif
										
									</li>
                                @endforeach
									<!-- <li class="virtual_cfo">
										<a href="services/virtual-cfo-services" class="menu-main-item text-decoration-none">VCFO</a>
									</li> -->
								</ul>
							</nav>
							<div class="searcha-area">
                <div class="row mt-1">
                  <div class="col-lg-8 col-md-8 col-8">
                    <input type="text" class="form-control" id="autosearch" style="border-radius: 20px;">
                  </div>
                </div>
																	<a class="btn btn-sm btn-chatgreen" href="#" id="loginpoclik" type="button" data-toggle="modal" data-target="#login_modal" style="margin-left: 220px;margin-top: -70px;">Sign In</a>
																<div class="search-bar">
										<h5>Most recommended services</h5>
										<ul>
											<li><a href="services/private-limited-incorporation">Private Limited Incorporation</a></li>
											<li><a href="services/limited-liability-partnership-llp">Limited Liability Partnership (LLP)</a></li>
											<li><a href="services/partnership-firm">Partnership Firm</a></li>
											<li><a href="services/pantan-application">PAN/TAN Application</a></li>
											<li><a href="services/gst">GST Registration</a></li>
											<li><a href="services/fssai-food-licence">FSSAI (Food License)</a></li>
											<li><a href="services/udyog-aadhar-msme-">MSME Registration</a></li>
											<li><a href="services/trademark-registration">Trademark Registration</a></li>
											<li><a href="services/esop-policy">ESOP Policy</a></li>
										</ul>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>