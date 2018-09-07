	<?php include 'admin-header.php'; ?>
	<figure class="figure w-100 after-header">
		<div class="container-fluid">
			<div class="row d-block d-xs-block d-sm-block d-lg-flex">
				<div class="col col-md-auto db-left">
					<div class="row text-center user-photo pt-5">
						<div class="col">
							<img class="wow zoomIn" src="images/user4.png">
							<p class="white mt-2">Ray</p>
						</div>
					</div>
					<div class="row user-menu">
						<div class="col p-0">
							<ul>
								<li class="active"><a class="wow fadeInLeft" href="of2-revise-banner-drug.php"><i class="fa fa-ban"></i>&nbsp;&nbsp; Revise Banned Drug(s)</a></li>
								<li><a class="wow fadeInLeft" href="of2-add-drug.php"><i class="fa fa-plus-square"></i>&nbsp;&nbsp; Add Drug</a></li>
								<li><a class="wow fadeInLeft" href="of2-change-password.php"><i class="fa fa-lock"></i>&nbsp;&nbsp; Change Password</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col db-right">
					<div class="db-content">
						<div class="row m-0">
							<div class="col py-3 px-4 head-sec">
								<h5 class="wow fadeInUp">Revise Banned Drug(s).</h5>
								<p class="m-0 lighter-color wow fadeInUp">Click either the "close", "ban", or "check" button to revise users. The close button suspense the user's account, the ban button blocks the users account while the check button unblocks the user's account.</p>
							</div>
						</div>
						<div class="row m-0 pt-4 px-4 d-block d-xs-block d-sm-block d-lg-flex">
							<div class="col p-0">
								<p class="m-0 mt-2 lighter-color wow fadeInUp">List of banned drug(s).</p>
							</div>
							<div class="col p-0">
								<div class="input-group search-mdl float-right">
						            <input class="form-control py-2" type="search" value="search" id="example-search-input">
						            <span class="input-group-append">
						                <button class="btn blue-btn white" type="button">
						                    <i class="fa fa-search"></i>
						                </button>
						            </span>
						        </div>
							</div>
						</div>
						<div class="row m-0 px-4 pt-2">
							<div class="col p-0">
								<div class="table-responsive">
									<table class="table table-striped table-light text-center">
										<thead>
										    <tr>
										      <th scope="col">Drug</th>
										      <th scope="col">Manufacturer</th>
										      <th scope="col">Description</th>
										      <th scope="col">Effect(s)</th>
										      <th scope="col">ACTION</th>
										    </tr>
										</thead>
									  	<tbody>
										    <tr>
												<td>Ace345</td>
												<td>Doco Pharm</td>
												<td>Red, Blue Pack</td>
												<td>Mental Disorder</td>
												<td>
													<a href="#" class="action-icon fa fa-close"></a>
												</td>
										    </tr>
										    <tr>
												<td>Ace345</td>
												<td>Doco Pharm</td>
												<td>Red, Blue Pack</td>
												<td>Mental Disorder</td>
												<td>
													<a href="#" class="action-icon fa fa-close"></a>
												</td>
										    </tr>
									  	</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="row text-center">
							<div class="col mt-4 mb-4">
								<p>Displaying <b>1 - 2</b> member(s) in total <b>2</b></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</figure>
	<?php include 'footer.php'; ?>