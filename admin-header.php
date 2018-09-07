<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/datepicker3.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script> 

	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="js/owl/owl.carousel.min.js" ></script>
	<script type="text/javascript">
		$(document).ready(function(){

			// Date Picker For Forms Starts

				$('.sandbox-container input').datepicker({
				    autoclose: true
				});

				$('.sandbox-container input').on('show', function(e){
				    console.debug('show', e.date, $(this).data('stickyDate'));
				    
				    if ( e.date ) {
				         $(this).data('stickyDate', e.date);
				    }
				    else {
				         $(this).data('stickyDate', null);
				    }
				});

				$('.sandbox-container input').on('hide', function(e){
				    console.debug('hide', e.date, $(this).data('stickyDate'));
				    var stickyDate = $(this).data('stickyDate');
				    
				    if ( !e.date && stickyDate ) {
				        console.debug('restore stickyDate', stickyDate);
				        $(this).datepicker('setDate', stickyDate);
				        $(this).data('stickyDate', null);
				    }
				});

			// Date Picker For Forms Ends

			// Animation For Moving Content on Scroll Starts

				wow = new WOW({
			        animateClass: 'animated',
			        offset:       100,
			        callback:     function(box) {
			          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
			        }
			      }
			    );
			    wow.init();

		    // Animation For Moving Content on Scroll Ends

		    // Sidebar Show Hide on Mobile Starts

				if (window.matchMedia("(max-width: 991px)").matches) {
					$('.db-left').addClass('sidebar-closed');
					$('.sidebar-toggler').click(function(){
						$('.db-left').toggleClass('sidebar-open').toggleClass('sidebar-closed');
						$('body').toggleClass('add-overlay');
					});

					$( ".sidebar-toggler" ).insertBefore( $( ".user-photo" ) );
				}
			// Sidebar Show Hide on Mobile Ends
		});			


	</script>
</head>
<body class="admin-dashboard">
	<header class="header pt-3 pb-3">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-auto col align-self-center wow fadeInLeft">
					<a href="">
						<img class="img-fluid logo" src="images/logo.png">
					</a>
				</div>
				<div class="col text-right align-self-center header-info-area wow fadeInRight">
					<ul>
						<li class="notify-bell">
							<a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="badge">1</span>
							</a>
							<div class="dropdown-menu">
								<ul>
									<li class="dropdown-item media">
										<div class="media-left">
											<span class="notification-icon">
												<i class="fa fa-check bg-success"></i>
											</span>
										</div>
										<div class="media-body-custom">
											<h6 class="media-heading">Margaret Govan</h6>
											<p class="m-0">I like your portfolio, let's start.</p>
											<p class="m-0"><small>Today</small></p>
										</div>
									</li>
									<li class="dropdown-item media">
										<div class="media-left">
											<span class="notification-icon">
												<i class="fa fa-file bg-warning"></i>
											</span>
										</div>
										<div class="media-body-custom">
											<h6 class="media-heading">Margaret Govan</h6>
											<p class="m-0">I like your portfolio, let's start.</p>
											<p class="m-0"><small>Today</small></p>
										</div>
									</li>
									<li class="dropdown-item media">
										<div class="media-left">
											<span class="notification-icon">
												<i class="fa fa-minus bg-danger"></i>
											</span>
										</div>
										<div class="media-body-custom">
											<h6 class="media-heading">Margaret Govan</h6>
											<p class="m-0">I like your portfolio, let's start.</p>
											<p class="m-0"><small>Today</small></p>
										</div>
									</li>
								</ul>
							</div>
						</li>
						<li class="msg-notify">
							<a href="" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-envelope"></i>
								<span class="badge">1</span>
							</a>
							<div class="dropdown-menu">
								<ul>
									<li class="dropdown-item media">
										<div class="media-left">
											<span class="avatar avatar-sm avatar-online rounded-circle">
												<img class="img-fluid" src="images/user1.png" alt="avatar">
												<i></i>
											</span>
										</div>
										<div class="media-body-custom">
											<h6 class="media-heading">Margaret Govan</h6>
											<p class="m-0">I like your portfolio, let's start.</p>
											<p class="m-0"><small>Today</small></p>
										</div>
									</li>
									<li class="dropdown-item media">
										<div class="media-left">
											<span class="avatar avatar-sm avatar-busy rounded-circle">
												<img class="img-fluid" src="images/user1.png" alt="avatar">
												<i></i>
											</span>
										</div>
										<div class="media-body-custom">
											<h6 class="media-heading">Margaret Govan</h6>
											<p class="m-0">I like your portfolio, let's start.</p>
											<p class="m-0"><small>Today</small></p>
										</div>
									</li>
									<li class="dropdown-item media">
										<div class="media-left">
											<span class="avatar avatar-sm avatar-away rounded-circle">
												<img class="img-fluid" src="images/user1.png" alt="avatar">
												<i></i>
											</span>
										</div>
										<div class="media-body-custom">
											<h6 class="media-heading">Margaret Govan</h6>
											<p class="m-0">I like your portfolio, let's start.</p>
											<p class="m-0"><small>Today</small></p>
										</div>
									</li>
								</ul>
							</div>
						</li>
						<li class="settings-icon">
							<a href="" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-cog"></i>
							</a>
						</li>
						<li class="user-profile">
							<div class="dropdown logged-in-user">
								<div class="dropdown-toggle" data-toggle="dropdown">
									<img src="images/user1.png">
									<i class="fa fa-user desktop-hidden"></i>
									<span class="adminname">Kevin</span>
								</div>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#"><i class="fa fa-user"></i>&nbsp; &nbsp; Edit Profile</a>
									<a class="dropdown-item" href="#"><i class="fa fa-envelope"></i>&nbsp; &nbsp; My Inbox</a>
									<a class="dropdown-item" href="#"><i class="fa fa-comments-o"></i>&nbsp; &nbsp; Chats</a>
									<a class="dropdown-item" href="#"><i class="fa fa-tasks"></i>&nbsp; &nbsp; Tasks</a>
									<a class="dropdown-item" href="#"><i class="fa fa-power-off"></i>&nbsp; &nbsp; Logout</a>
								</div>
							</div> 
						</li>
					</ul>
				</div>
			</div>
			<div class="row desktop-hidden sidebar-toggler m-0">
				<i class="fa fa-bars white w-100"></i>
			</div>
		</div>
	</header>