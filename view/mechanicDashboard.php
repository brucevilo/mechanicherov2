<?php
session_start();
  if(!isset($_SESSION['mechanic'])){
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
	<title>MechanicHero></title>
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

	<div class="">
		<div class=""></div>
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
												<a href="motoristDashboard.php">Home</a>
											
											</li>

											<li>
												<a href="motoristVehicle.php">On-Going-Work</a>
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
				<?php
            include('../controller/getallSR.php');
          
            			
            foreach($rows as $row){

            echo " <article class='post side-item text-center text-md-left content-padding bordered event-post'>";
            echo "<div class='row'>";
			echo "<div class='col-xl-3 col-lg-3 col-md-3'>";
										echo "<div class='item-media cover-image'>";
										
										echo "<img src='../controller/images/".$row['vehicle_image']."' alt=''>";
										// echo "<img src='../controller/images/9383-car-repair-362150_960_720.jpg alt=''>";
										// echo "img src='../controller/images/".$row['vehicle_imaged'];
										echo "<div class='media-links'>";
										echo "<a class='abs-link' title='' href='mechViewCar.php?id=".$row['vehicle_plateno']."'></a>";	
									echo "		</div>
                                    </div>
                                </div>";

									echo "<div class='col-xl-7 col-lg-6 col-md-5'>";
									echo "<div class='divider-11 d-none d-xl-block'></div>";
                                    echo "	<div class='item-content'>
                                              <h4>";
                                    echo  $row['service']."</h4>";
                                    
												
										

										echo "<div class='mb-10 item-meta color-darkgrey'>";
									
										echo  strtoupper("<h6>Brand :".$row['vehicle_brand']."<br/>") ;		
										// echo "</span>
										// 		<span>";
                                        echo  strtoupper("Model :".$row['vehicle_model']."</span></h6>");
                                        echo  strtoupper("<h7>More Info :".$row['problems']."</span><br/>");
										
										echo "<a href='mechViewCar.php?id=".$row['servreqid']."'  class='btn btn-small btn-outline-maincolor btn-appointment' >View Details</a>";

                                        // echo "</span>";
										echo "</div>";
                                        // echo  strtoupper(" <span>".$row['vehicle_service']."</span></h6>");
										echo "</p>.";
										echo "</p>";

									echo"	</div>
									</div>
								</div>
							</article>

                            </div>
                </div> ";
            }
                ?>


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
							<p><a target="_blank" href="https://templateshub.net">Mechanic Hero</a></p>
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