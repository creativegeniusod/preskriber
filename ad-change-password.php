	<?php include 'admin-header.php'; ?>
	<figure class="figure w-100 after-header">
		<div class="container-fluid">
			<div class="row d-block d-xs-block d-sm-block d-lg-flex">
				<div class="col col-md-auto db-left">
					<div class="row text-center user-photo pt-5">
						<div class="col">
							<img class="wow zoomIn" src="images/user1.png">
							<p class="white mt-2">Kelvin</p>
						</div>
					</div>
					<div class="row user-menu">
						<div class="col p-0">
							<ul>
								<li><a class="wow fadeInLeft" href="ad-ap-revise-user.php"><i class="fa fa-users"></i>&nbsp;&nbsp; Revise Users</a></li>
								<li><a class="wow fadeInLeft" href="ad-add-official.php"><i class="fa fa-user-plus"></i>&nbsp;&nbsp; Add Official</a></li>
								<li><a class="wow fadeInLeft" href="ad-add-organisation.php"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp; Add Organisation</a></li>
								<li class="active"><a class="wow fadeInLeft" href="ad-change-password.php"><i class="fa fa-lock"></i>&nbsp;&nbsp; Change Password</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col db-right">
					<div class="db-content">
						<div class="row m-0">
							<div class="col py-3 px-4 head-sec">
								<h5 class="wow fadeInUp">Add Organisation</h5>
								<p class="m-0 lighter-color wow fadeInUp">Fill in the input field with the appropriate information, and click the submit button.</p>
							</div>
						</div>
						<div class="row m-0 px-4 pt-2">
							<div class="col p-0">
								<form class="mt-5 add-official wow fadeInUp">
									<div class="row">
										<div class="col-lg-6 col-xs-12 col-sm-6">
											<div class="form-group">
					                        	<input type="password" class="form-control form-control-lg" name="" id="" placeholder="New Password*">
					                        </div>
					                    </div>
					                    <div class="col-lg-6 col-xs-12 col-sm-6">
					                    	<div class="form-group">
					                        	<input type="password" class="form-control form-control-lg" name="" id="" placeholder="Confirm new Password*">
					                        </div>
					                    </div>
					                </div>
					                <div class="row">
										<div class="col-lg-12 col-xs-12 col-sm-12 text-right">
											<div class="form-group m-0 action-btn">
					                        	<button class="btn green-btn">SUBMIT</button>
					                        </div>
					                    </div>
					                </div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</figure>
	<?php include 'footer.php'; ?>