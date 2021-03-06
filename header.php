<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/owl/owl.carousel.min.js" ></script>
	<script type="text/javascript">
		$(document).ready(function(){
		  $('.owl-carousel1').owlCarousel({
			    items:3,
			    loop:true,
			    margin:30,
			    autoplay:true,
			    autoplayTimeout: 5000,
			    navigation : true,
			    autoplayHoverPause: true,
			    responsive:{
			        0:{
			            items:1
			        },
			        600:{
			            items:1
			        },
			        1000:{
			            items:3
			        }
			    }
			});

		  	wow = new WOW({
		        animateClass: 'animated',
		        offset:       100,
		        callback:     function(box) {
		          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
		        }
		      }
		    );
		    wow.init();
		});
	</script>
</head>
<body class="main-site">
	<header class="header site-header pt-3 pb-3">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-auto col align-self-center wow fadeInLeft">
					<a href="">
						<img class="img-fluid logo" src="images/logo.png">
					</a>
				</div>
				<div class="col text-center menu-col align-self-center wow fadeInUp">
					<nav class="navbar navbar-expand-lg nav-custom navbar-dark wow fadeInUp">
						<div class="collapse navbar-collapse" id="navbarNav">
						    <ul class="navbar-nav m-auto">
						      	<li class="nav-item active">
						      		<a class="nav-link" href="/">Home</a>
							    </li>
							    <li class="nav-item">
							      	<a class="nav-link" href="">About Us</a>
							    </li>
							    <li class="nav-item">
							      	<a class="nav-link" href="">Services</a>
							    </li>
							    <li class="nav-item">
							      	<a class="nav-link" href="#">Contact Us</a>
							    </li>
							    <li class="nav-item desktop-hidden">
							      	<a class="blue-btn-menu nav-link" href="#loginModal" role="button" data-toggle="modal">Login</a>
							    </li>
							    <li class="nav-item desktop-hidden">
							      	<a href="#signupModal" role="button" data-toggle="modal" class="blue-btn-menu nav-link">Sign Up</a>
							    </li>
						    </ul>
						</div>
					</nav>
				</div>
				<div class="col-md-auto col align-self-center action-btn text-right wow fadeInRight">
					<div class="col-md-auto toggle-btn navbar-light">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>					
				</div>
					<a class="btn blue-btn" href="#loginModal" role="button" data-toggle="modal">Login</a>
					<a href="#signupModal" role="button" data-toggle="modal" class="btn green-btn">Sign Up</a>
				</div>
				<!-- <div class="col-md-auto toggle-btn navbar-light">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>					
				</div> -->
			</div>
		</div>
	</header>