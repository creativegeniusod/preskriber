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
								<li><a class="wow fadeInLeft" href="ph-make-prescription.php"><i class="fa fa-users"></i>&nbsp;&nbsp; Make Prescription</a></li>
								<li><a class="wow fadeInLeft" href="ph-add-patient.php"><i class="fa fa-vcard-o"></i>&nbsp;&nbsp; Add New Patient</a></li>
								<li class="active"><a class="wow fadeInLeft" href="ph-view-description.php"><i class="fa fa-eye"></i>&nbsp;&nbsp; View Prescription</a></li>
								<li><a class="wow fadeInLeft" href="ph-request-permission.php"><i class="fa fa-check-circle-o"></i>&nbsp;&nbsp; Request Permission</a></li>
								<li><a class="wow fadeInLeft" href="ph-change-password.php"><i class="fa fa-lock"></i>&nbsp;&nbsp; Change Password</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col db-right">
					<div class="db-content">
						<div class="row m-0">
							<div class="col py-3 px-4 head-sec">
								<h5 class="wow fadeInUp">View Prescription</h5>
								<p class="m-0 lighter-color wow fadeInUp">This displays the last 10 drug prescription of the patient. To use this functionality, use the "Request Permission" functionality first to get a secret code.</p>
							</div>
						</div>
						<div class="row m-0 px-4 pt-2">
							<div class="col p-0">
								<form class="mt-5 add-official wow fadeInUp">
									<div class="row">
										<div class="col-lg-6 col-xs-12 col-sm-6">
											<div class="form-group">
					                        	<input type="text" class="form-control form-control-lg" name="" id="" placeholder="Secret code">
					                        </div>
					                    </div>
					                    <div class="col-lg-6 col-xs-12 col-sm-6">
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