	<?php include 'admin-header.php'; ?>
	<figure class="figure w-100 after-header">
		<div class="container-fluid">
			<div class="row d-block d-xs-block d-sm-block d-lg-flex ">
				<div class="col col-md-auto db-left">
					<div class="row text-center user-photo pt-5">
						<div class="col">
							<img class="wow zoomIn" src="images/user2.png">
							<p class="white mt-2">James</p>
						</div>
					</div>
					<div class="row user-menu">
						<div class="col p-0">
							<ul>
								<li><a class="wow fadeInLeft" href="phm-verify-prescription.php"><i class="fa fa-check-square-o"></i>&nbsp;&nbsp; Verify Prescription</a></li>
								<li><a class="wow fadeInLeft" href="phm-administer-prescription.php"><i class="fa fa-user"></i>&nbsp;&nbsp; Administer Prescription</a></li>
								<li><a class="wow fadeInLeft" href="phm-add-affiliate.php"><i class="fa fa-plus-square"></i>&nbsp;&nbsp; Add Affliate</a></li>
								<li><a class="wow fadeInLeft" href="phm-affiliate-list.php"><i class="fa fa-list"></i>&nbsp;&nbsp; Affliate list</a></li>
								<li class="active"><a class="wow fadeInLeft" href="phm-change-password.php"><i class="fa fa-check-circle-o"></i>&nbsp;&nbsp; Change Password</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col db-right">
					<div class="db-content">
						<div class="row m-0">
							<div class="col py-3 px-4 head-sec">
								<h5 class="wow fadeInUp">Change Password</h5>
								<p class="m-0 lighter-color wow fadeInUp">Fill the input field with the appropriate information(a minimum of 7 alphameric characters, and least one uppercase/lowercase letter), and click the submit button.</p>
							</div>
						</div>
						<div class="row m-0 px-4 pt-2">
							<div class="col p-0">
								<form class="mt-5 add-official wow fadeInUp">
									<div class="row">
										<div class="col-lg-6 col-xs-12 col-sm-6">
											<div class="form-group">
					                        	<input type="password" class="form-control form-control-lg" name="" id="" placeholder="New Password">
					                        </div>
					                    </div>
					                    <div class="col-lg-6 col-xs-12 col-sm-6">
					                    	<div class="form-group">
					                        	<input type="password" class="form-control form-control-lg" name="" id="" placeholder="Confirm New Password">
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