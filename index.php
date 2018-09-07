	<?php include 'header.php'; ?>
	<figure class="figure w-100 banner text-center">
		<div class="banner-caption">
			<div class="container">
				<div class="row">
					<div class="col">
						<h1 class=" wow fadeInUp">Enhancing Health Care</h1>
						<p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						<div class="row m-0 wow fadeInUp">
							<form class="w-100 mt-4">
								<div class="search-outer">
									<div class="dropdown">
									  	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    Search By Name
									  	</button>
									  	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										    <a class="dropdown-item" href="#">Action</a>
										    <a class="dropdown-item" href="#">Another action</a>
										    <a class="dropdown-item" href="#">Something else here</a>
									  	</div>
									</div>
									<input class="form-control" type="" name="" value="Search for drugs or pharmacy store">
								</div>
								<div class="search-btn">
									<button class="btn green-btn">SEARCH</button>
								</div>
							</form>
						</div>
						<div class="row ml-0 mr-0 wow fadeInUp">
							<div class="col">
								<button class="or-opt mt-5 mb-5">OR</button>
							</div>
						</div>
						<div class="row m-0 wow fadeInUp">
							<div class="col">
								<button class="btn danger-btn mb-3"><i class="fa fa-ban"></i> Check Prohibited Drug</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</figure>
	<figure class="figure w-100 text-center create-account pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col">
					<h3 class="wow fadeInUp">People Visited at PresKribe</h3>
					<p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<ul>
						<li class="wow fadeInLeft">
							<span class="circle">520</span>
							<p>Doctors</p>
						</li>
						<li class="wow fadeInUp">
							<span class="circle">203</span>
							<p>Pharmacists</p>
						</li>
						<li class="wow fadeInRight">
							<span class="circle">1050</span>
							<p>Others</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="row wow fadeInUp">
				<div class="col">
					<button class="btn green-btn">CREATE ACCOUNT NOW</button>
				</div>
			</div>
		</div>
	</figure>
	<figure class="figure w-100 text-center companies pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col mb-3">
					<h3 class="wow fadeInUp">Leading Pharmaceutical Companies</h3>
				</div>
			</div>
			<div class="row wow fadeInRight">
				<div class="col">
					<div class="owl-carousel owl-carousel1 owl-theme owl-loaded owl-drag">
						<div class="item brand-col brand1">
							<div class="brand-name">
								<div class="brand-logo">
									<img src="images/cipla.png">
								</div>
								<div class="brand-info">
									<h4>Cipla</h4>
									<p class="white m-0">Caring for life</p>
									<p class="mt-2"><small>Best pharmaceutical Company in 2017</small></p>
								</div>
							</div>
							<div class="brand-desc">
								<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></p>
							</div>
							<div class="view-more-btn action-btn text-right">
								<a class="btn blue-btn" href="">VIEW MORE</a>
							</div>
						</div>
						<div class="item brand-col brand2">
							<div class="brand-name">
								<div class="brand-logo">
									<img src="images/ranbaxy.png">
								</div>
								<div class="brand-info">
									<h4>Ranbaxy</h4>
									<p class="white m-0">Laboratories limited</p>
									<p class="mt-2"><small>A Branch of Sun Pharma</small></p>
								</div>
							</div>
							<div class="brand-desc">
								<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></p>
							</div>
							<div class="view-more-btn action-btn text-right">
								<a class="btn blue-btn" href="">VIEW MORE</a>
							</div>
						</div>
						<div class="item brand-col brand2">
							<div class="brand-name">
								<div class="brand-logo">
									<img src="images/sanofi.png">
								</div>
								<div class="brand-info">
									<h4>SANOFI</h4>
									<p class="white m-0">Laboratories limited</p>
									<p class="mt-2"><small>Lorem ipsum dolor sit amet, consect</small></p>
								</div>
							</div>
							<div class="brand-desc">
								<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></p>
							</div>
							<div class="view-more-btn action-btn text-right">
								<a class="btn blue-btn" href="">VIEW MORE</a>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</figure>
	<?php include 'footer.php'; ?>

	<div id="loginModal" class="modal fade custom-popup" tabindex="-1" role="dialog" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4>Sign In To PresKriber</h4>
	                <p>Enter your details below</p>
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	            </div>
	            <div class="modal-body">
	                <form class="form pt-5 pb-2" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
	                    <div class="form-group">
	                        <input type="text" class="form-control form-control-lg" name="" id="" placeholder="Email Address">
	                    </div>
	                    <div class="form-group">
	                        <input type="password" class="form-control form-control-lg" id="" required="" autocomplete="new-password" placeholder="Password">
	                    </div>
	                    <div class="form-group action-btn">
	                        <button type="submit" class="btn green-btn w-100" id="btnLogin">Login</button>
	                    </div>
	                    <div class="form-group text-center">
	                    	<p class="m-0">Forgot Password?</p>
	                    </div>
	                    <div class="form-group m-0 text-center">
	                    	<p class="m-0">Don't have an account? <a href="">Create Now!</a></p>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>

	<div id="signupModal" class="modal fade custom-popup" tabindex="-1" role="dialog" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4>Sign Up For The New Account</h4>
	                <p>Enter your details below</p>
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	            </div>
	            <div class="modal-body">
	                <form class="form py-5" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
	                    <div class="form-group">
	                        <input type="text" class="form-control form-control-lg" name="" id="" placeholder="Username">
	                    </div>
	                    <div class="form-group">
	                        <input type="text" class="form-control form-control-lg" name="" id="" placeholder="Email Address">
	                    </div>
	                    <div class="form-group">
	                        <input type="password" class="form-control form-control-lg" id="" required="" autocomplete="new-password" placeholder="Password">
	                    </div>
	                    <div class="form-group">
	                        <input type="password" class="form-control form-control-lg" id="" required="" autocomplete="new-password" placeholder="Confirm Password">
	                    </div>
	                    <div class="form-group action-btn">
	                        <button type="submit" class="btn green-btn w-100" id="btnLogin">Sign Up</button>
	                    </div>
	                    <div class="form-group m-0 text-center">
	                    	<p class="m-0">By clicking the Sign Up button, you agree to our<br><a href="">Terms & Conditions</a> and <a href="">Privacy policy.</a></p>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
	

