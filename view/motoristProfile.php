<?php
session_start();
  if(!isset($_SESSION['motorist'])){
    header("location:index.php");
  }
 ?> 
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<head>
	<title>MechanicHero</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="http://webdesign-finder.com/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div><!-- eof .modal -->

	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="modalLoginForm" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="row c-gutter-0">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span>×</span>
				</button>
				<div class="col-6">
					<div class="modal-content">
						<div class="modal-header justify-content-center">
							<h4 class="modal-title">Sign in</h4>
						</div>
						<div class="modal-body">
							<form action="http://webdesign-finder.com/">
								<div class="form-group has-placeholder">
									<label for="name-sigin">Your Name:</label>
									<input type="text" class="form-control" id="name-sigin" placeholder="Enter your name" name="First name">
								</div>
								<div class="form-group has-placeholder">
									<label for="sigpassword">Password:</label>
									<input type="password" class="form-control" id="sigpassword" placeholder="password" name="sigpassword">
								</div>
								<div class="modal-password">
									<a href="#" class="modal-password-btn">Forgot password?</a>
								</div>
								<div class="modal-footer d-flex justify-content-center">
									<button type="submit" class="btn btn-small btn-maincolor log-btn">Log in</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-6 ds s-overlay">
					<img src="images/modal-login-form.jpg" alt="">
				</div>
			</div>
		</div>
	</div>


	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->


			<div class="header_absolute s-parallax ds bs s-overlay">

				<!--topline section visible only on small screens|-->
				<section class="page_toplogo ds s-overlay s-pt-10 s-pb-5 s-py-lg-30">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12">
								<div class="d-lg-flex justify-content-lg-end align-items-lg-center">
									<div class="mr-auto">
										<!--
							if you want to display toplogo info on smaller screens
							than use following CSS classes below:
						 	d-sm-flex justify-content-sm-center
						 -->
										<div class="d-none d-lg-flex justify-content-center justify-content-lg-start">
											<a href="mechanicDashboard.php" class="logo">
												<img src="images/logo.png" alt="">
												<span class="logo-text fw-500">Mechannic<span class="fw-200">Hero</span></span>
											</a>
										</div>
									</div>
									<!--
						if you want to display toplogo info on smaller screens
						than use following CSS classes below:
						d-sm-flex justify-lg-content-end justify-content-sm-between align-items-center
					-->
									<div class="d-flex justify-lg-content-end align-items-center meta-icons">
										<div class="media">
											<div class="icon-styled color-main fs-20">
												<i class="ico-email"></i>
											</div>
											<div class="media-body">
												<h6>Mail Us</h6>
												<p class="fw-400">
													Info@MechanicHero.com
												</p>
											</div>
										</div>
										<div class="media d-none d-md-flex">
											<div class="icon-styled color-main fs-20">
												<i class="ico-placeholder"></i>
											</div>
											<div class="media-body">
												<h6>Location</h6>
												<p class="fw-400">
													Waukesha, WI 53186
												</p>
											</div>
										</div>
										<div class="media">
											<div class="icon-styled color-main fs-20">
												<i class="ico-phone-call"></i>
											</div>
											<div class="media-body">
												<h6>Phone</h6>
												<p class="fw-400">
													+1 23 456 78 90
												</p>
											</div>
										</div>
										<div class="d-none d-xl-block">
											<a href="#" class="btn btn-small btn-outline-maincolor btn-appointment">Schedule Maintenance</a>
										</div>
									</div>
								</div>
								<!-- header toggler -->
							</div>
						</div>
					</div>
				</section>


				<!--eof topline-->

				<!-- header with single Bootstrap column only for navigation and includes. Used with topline and toplogo sections. Menu toggler must be in toplogo section -->
				<header class="page_header s-py-10 s-py-lg-0 ds ms s-overlay nav-bordered justify-nav-center">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="d-lg-none col-11">
								<a href="mechanicDashboard.php" class="logo">
									<img src="images/logo.png" alt="">
									<span class="logo-text fw-500">Mechanic<span class="fw-200">Hero</span></span>
								</a>
							</div>
							<div class="col-xl-12">

								<div class="nav-wrap">
									<!-- main nav start -->
									<nav class="top-nav">
										<ul class="nav sf-menu">
                                        <li class="active">
												<a href="motoristDashboard.php">Service</a>
											
											</li>

											<li>
												<a href="motoristVehicle.php">Vehicle</a>
											</li>
										
											<li>
												<a href="motoristProfile.php">Profile</a>
											</li>
											<li>
											<li>
												<a href="logout.php">Logout</a>
											<li>
							
									</nav>
									<!-- eof main nav -->


								</div>

							</div>
						</div>
					</div>

					<!-- header toggler -->

					<span class="toggle_menu"><span></span></span>

				</header>

				<section class="page_title ds s-pt-105 s-pb-50 s-pt-lg-115 s-pb-lg-60">
					<div class="divider-3 d-none d-lg-block"></div>
					<div class="container">
						<div class="row">

							<div class="col-md-12">
								<h1 class="bold text-center text-lg-left">Services </h1>
	
							</div>

						</div>
					</div>
				</section>


			</div>


			<section class="ls s-pt-50 s-pb-60 s-pt-lg-90 s-pb-lg-100 s-pt-xl-140 s-pb-xl-150 gallery-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="row justify-content-center">
								<div class="col-md-10 col-xl-7">
									<div class="filters gallery-filters text-lg-right">
										<a href="#" data-filter="*" class="active selected">All</a>
										<a href="#" data-filter=".repair">Repair</a>
										<a href="#" data-filter=".diagnostic">Diagnostic</a>
										<a href="#" data-filter=".towing">Towing</a>
										<a href="#" data-filter=".wash">Wash</a>
										<a href="#" data-filter=".testing">Testing</a>
									</div>
								</div>
							</div>
							<div class="row isotope-wrapper masonry-layout c-gutter-10 c-mb-30" data-filters=".gallery-filters">

								<div class="col-xl-4 col-md-6 repair wash">

									<div class="vertical-item text-center ">
										<div class="item-media">
											<img src="images/gallery/01.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="link-zoom photoswipe-link" title="" href="images/gallery/01.jpg"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h6 class="mb-15">
												<a href="gallery-single.html">Lorem ipsum dolor sit</a>
											</h6>
											<div class="tagcloud">
												<a href="#"><span>Repair</span></a>
												<a href="#"><span>Wash</span></a>
											</div>

										</div>
									</div>

								</div>

								<div class="col-xl-4 col-md-6 testing towing">
									<div class="vertical-item text-center ">
										<div class="item-media">
											<img src="images/gallery/02.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="link-zoom photoswipe-link" title="" href="images/gallery/02.jpg"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h6 class="mb-15">
												<a href="gallery-single.html">Amet consetetur sadipscing</a>
											</h6>
											<div class="tagcloud">
												<a href="#"><span>Towing</span></a>
											</div>

										</div>
									</div>
								</div>

								<div class="col-xl-4 col-md-6 diagnostic wash testing">
									<div class="vertical-item text-center ">
										<div class="item-media">
											<img src="images/gallery/03.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="link-zoom photoswipe-link" title="" href="images/gallery/03.jpg"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h6 class="mb-15">
												<a href="gallery-single.html">Elitr sed diam nonumy</a>
											</h6>
											<div class="tagcloud">
												<a href="#"><span>Diagnostic</span></a>
												<a href="#"><span>Testing</span></a>
											</div>

										</div>
									</div>
								</div>

								<div class="col-xl-4 col-md-6 repair diagnostic">
									<div class="vertical-item text-center ">
										<div class="item-media">
											<img src="images/gallery/04.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="link-zoom photoswipe-link" title="" href="images/gallery/04.jpg"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h6 class="mb-15">
												<a href="gallery-single.html">Tempor invidunt ut</a>
											</h6>
											<div class="tagcloud">
												<a href="#"><span>Testing</span></a>
											</div>

										</div>
									</div>
								</div>

								<div class="col-xl-4 col-md-6 testing towing">
									<div class="vertical-item text-center ">
										<div class="item-media">
											<img src="images/gallery/05.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="link-zoom photoswipe-link" title="" href="images/gallery/05.jpg"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h6 class="mb-15">
												<a href="gallery-single.html">Labore et dolore magna</a>
											</h6>
											<div class="tagcloud">
												<a href="#"><span>Towing</span></a>
												<a href="#"><span>Testing</span></a>

											</div>

										</div>
									</div>
								</div>

								<div class="col-xl-4 col-md-6 diagnostic wash towing">
									<div class="vertical-item text-center ">
										<div class="item-media">
											<img src="images/gallery/06.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="link-zoom photoswipe-link" title="" href="images/gallery/06.jpg"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h6 class="mb-15">
												<a href="gallery-single.html">Aliquyam erat sed diam</a>
											</h6>
											<div class="tagcloud">
												<a href="#"><span>Repair</span></a>
											</div>

										</div>
									</div>
								</div>

								<div class="col-xl-4 col-md-6 repair wash testing">
									<div class="vertical-item text-center ">
										<div class="item-media">
											<img src="images/gallery/07.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="link-zoom photoswipe-link" title="" href="images/gallery/07.jpg"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h6 class="mb-15">
												<a href="gallery-single.html">Voluptua vero</a>
											</h6>
											<div class="tagcloud">
												<a href="#"><span>Testing</span></a>
											</div>

										</div>
									</div>
								</div>

								<div class="col-xl-4 col-md-6 repair diagnostic towing">
									<div class="vertical-item text-center ">
										<div class="item-media">
											<img src="images/gallery/08.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="link-zoom photoswipe-link" title="" href="images/gallery/08.jpg"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h6 class="mb-15">
												<a href="gallery-single.html">Eos et accusam justo duo</a>
											</h6>
											<div class="tagcloud">
												<a href="#"><span>Repair</span></a>
											</div>

										</div>
									</div>
								</div>

								<div class="col-xl-4 col-md-6 repair wash">

									<div class="vertical-item text-center ">
										<div class="item-media">
											<img src="images/gallery/09.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="link-zoom photoswipe-link" title="" href="images/gallery/09.jpg"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h6 class="mb-15">
												<a href="gallery-single.html">Consectetur adipisicing elit</a>
											</h6>
											<div class="tagcloud">
												<a href="#"><span>Diagnostic</span></a>
											</div>

										</div>
									</div>

								</div>

								<div class="col-xl-4 col-md-6 testing towing">
									<div class="vertical-item text-center ">
										<div class="item-media">
											<img src="images/gallery/10.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="link-zoom photoswipe-link" title="" href="images/gallery/10.jpg"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h6 class="mb-15">
												<a href="gallery-single.html">Dolores et ea rebum</a>
											</h6>
											<div class="tagcloud">
												<a href="#"><span>Repair</span></a>
											</div>

										</div>
									</div>
								</div>

								<div class="col-xl-4 col-md-6 diagnostic wash testing">
									<div class="vertical-item text-center ">
										<div class="item-media">
											<img src="images/gallery/01.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="link-zoom photoswipe-link" title="" href="images/gallery/11.jpg"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h6 class="mb-15">
												<a href="gallery-single.html">Stet clita kasd gubergren</a>
											</h6>
											<div class="tagcloud">
												<a href="#"><span>Diagnostic</span></a>
											</div>

										</div>
									</div>
								</div>

								<div class="col-xl-4 col-md-6 repair diagnostic">
									<div class="vertical-item text-center ">
										<div class="item-media">
											<img src="images/gallery/12.jpg" alt="">
											<div class="media-links">
												<div class="links-wrap">
													<a class="link-zoom photoswipe-link" title="" href="images/gallery/12.jpg"></a>
												</div>
											</div>
										</div>
										<div class="item-content">
											<h6 class="mb-15">
												<a href="gallery-single.html">Clita kasd gubergren</a>
											</h6>
											<div class="tagcloud">
												<a href="#"><span>Testing</span></a>
											</div>

										</div>
									</div>
								</div>

							</div>
							<!-- .isotope-wrapper-->

							<div class="row">
								<div class="col-sm-12 text-center">
									<a href="#" class="btn btn-outline-maincolor">Load More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<footer class="page_footer text-center text-md-left ds ms s-pt-65 s-pt-lg-125 s-pb-lg-35 c-gutter-40 main-footer">
				<div class="container">
					<div class="row">
						<div class="divider-20 d-none d-lg-block"></div>

						<div class="col-md-6 col-lg-3 animate" data-animation="fadeInUp">

							<div class="widget widget_icons_list">
								<a href="mechanicDashboard.php" class="logo">
									<img src="images/logo.png" alt="">
									<span class="logo-text fw-500">Mechannic<span class="fw-200">Hero</span></span>
								</a>
								<div class="media side-icon-box">
									<div class="icon-styled color-main">
										<i class="fa fa-map-marker"></i>
									</div>
									<p class="media-body color-grey">2688 Simpson Avenue Harrisburg, PA 17109 </p>
								</div>
								<div class="media side-icon-box">
									<div class="icon-styled color-main">
										<i class="fa fa-phone"></i>
									</div>

									<p class="media-body color-grey">+1 234 56 78</p>
								</div>
								<div class="media side-icon-box">
									<div class="icon-styled color-main">
										<i class="fa fa-envelope"></i>
									</div>
									<p class="media-body color-grey">
										<a href="mailto:">info@MechnicHero.com</a>
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 animate order-md-3 order-lg-2" data-animation="fadeInUp">
							<div class="widget widget_page_links">
								<h3>Useful Pages</h3>
								<ul>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Contact Us</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Blog post</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>About Us</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Services</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 animate order-md-4 order-lg-3" data-animation="fadeInUp">
							<div class="widget widget_services_links">
								<h3>Services</h3>
								<ul>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Exterior Hand Wash</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Tower Hand Dry</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Tire Dressing</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Wheel Shine</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 c-gutter-10 animate order-lg-4" data-animation="fadeInUp">
							<div class="widget widget_working_hours">
								<h3>Our Hours</h3>
								<ul>
									<li class="row">
										<div class="color-grey col-3">
											Mn-Fr
										</div>
										<div class="col-md-9 col-5">
											<span class="color-darkgrey">9.<sup>00</sup>am - 8.<sup>00</sup>pm</span>
										</div>
									</li>
									<li class="row">
										<div class="color-grey col-3">
											Sat
										</div>
										<div class="col-md-9 col-5">
											<span class="color-darkgrey">9.<sup>00</sup>am - 4.<sup>00</sup>pm</span>
										</div>
									</li>
									<li class="row">
										<div class="color-grey col-3">
											Sun
										</div>
										<div class="col-md-9 col-5">
											<span class="color-darkgrey">output</span>
										</div>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</footer>


			<section class="page_copyright ds ms s-pt-5 s-pb-25 s-py-lg-20">
				<div class="container">
					<div class="divider-2 d-none d-lg-block"></div>
					<div class="row align-items-center">
						<div class="divider-20 d-none d-lg-block"></div>

						<div class="col-md-12 text-center">
							<p class="social-icons with-border">
								<span><a href="https://www.facebook.com/" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
								<span><a href="https://telegram.org/" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
								<span><a href="https://www.instagram.com/" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
							</p>
							<p><a target="_blank" href="https://templateshub.net">Templates Hub</a></p>
						</div>
						<div class="divider-20 d-none d-lg-block"></div>
					</div>
				</div>
			</section>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>


</html>