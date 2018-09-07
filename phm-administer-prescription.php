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
								<li class="active"><a class="wow fadeInLeft" href="phm-administer-prescription.php"><i class="fa fa-user"></i>&nbsp;&nbsp; Administer Prescription</a></li>
								<li><a class="wow fadeInLeft" href="phm-add-affiliate.php"><i class="fa fa-plus-square"></i>&nbsp;&nbsp; Add Affliate</a></li>
								<li><a class="wow fadeInLeft" href="phm-affiliate-list.php"><i class="fa fa-list"></i>&nbsp;&nbsp; Affliate list</a></li>
								<li><a class="wow fadeInLeft" href="phm-change-password.php"><i class="fa fa-check-circle-o"></i>&nbsp;&nbsp; Change Password</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col db-right">
					<div class="db-content">
						<div class="row m-0">
							<div class="col py-3 px-4 head-sec">
								<h5 class="wow fadeInUp">Administer Prescription</h5>
								<p class="m-0 lighter-color wow fadeInUp">Cross check or edit the inputs you have entered.</p>
							</div>
						</div>
						<div class="row m-0 px-4 pt-5 administer-prescription">
							<div class="col p-0">
								<div class="table-responsive">
									<table class="table table-striped table-light text-center">
										<thead>
										    <tr>
										      <th class="text-left" scope="col"><input class="" type="checkbox" name="">&nbsp; PRESCRIBER ID</th>
										      <th scope="col">EXPIRY DATE</th>
										      <th scope="col">ADD COMMENTS</th>
										      <th scope="col">ACTION</th>
										    </tr>
										</thead>
									  	<tbody>
										    <tr>
												<td class="text-left">
													<input class="" type="checkbox" name="">
													<span class="pr-id">&nbsp;XXX XXXX XXXX</span>
												</td>
												<td>DD/MM/YYYY</td>
												<td>
													<input type="" name="" class="form-control" placeholder="Enter Comment">
												</td>
												<td>
													<a href="#" class="action-icon fa fa-pencil"></a>
													<a href="#" class="action-icon fa fa-trash"></a>
													<a href="#" class="action-icon fa fa-eye"></a>
												</td>
										    </tr>
										    <tr>
												<td class="text-left">
													<input class="" type="checkbox" name="">
													<span class="pr-id">&nbsp;XXX XXXX XXXX</span>
												</td>
												<td>DD/MM/YYYY</td>
												<td>
													<input type="" name="" class="form-control" placeholder="Enter Comment">
												</td>
												<td>
													<a href="#" class="action-icon fa fa-pencil"></a>
													<a href="#" class="action-icon fa fa-trash"></a>
													<a href="#" class="action-icon fa fa-eye"></a>
												</td>
										    </tr>
										    <tr>
												<td class="text-left">
													<input class="" type="checkbox" name="">
													<span class="pr-id">&nbsp;XXX XXXX XXXX</span>
												</td>
												<td>DD/MM/YYYY</td>
												<td>
													<input type="" name="" class="form-control" placeholder="Enter Comment">
												</td>
												<td>
													<a href="#" class="action-icon fa fa-pencil"></a>
													<a href="#" class="action-icon fa fa-trash"></a>
													<a href="#" class="action-icon fa fa-eye"></a>
												</td>
										    </tr>
										    <tr>
												<td class="text-left">
													<input class="" type="checkbox" name="">
													<span class="pr-id">&nbsp;XXX XXXX XXXX</span>
												</td>
												<td>DD/MM/YYYY</td>
												<td>
													<input type="" name="" class="form-control" placeholder="Enter Comment">
												</td>
												<td>
													<a href="#" class="action-icon fa fa-pencil"></a>
													<a href="#" class="action-icon fa fa-trash"></a>
													<a href="#" class="action-icon fa fa-eye"></a>
												</td>
										    </tr>
									  	</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="row m-0 px-4">
							<div class="col-lg-12 col-xs-12 col-sm-12 text-right p-0">
								<div class="form-group m-0 action-btn form-btn">
		                        	<button class="btn green-btn">SUBMIT</button>
		                        </div>
		                    </div>
		                </div>
					</div>
				</div>
			</div>
		</div>
	</figure>
	<?php include 'footer.php'; ?>