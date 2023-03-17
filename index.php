
<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title>Online Admission Management System</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.jpg">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>



<style type="text/css">
	<!--
	.style1 {
		color: #000000
	}
	-->
</style>
</head>

<body class="host_version">

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header tit-up">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Start Admission Process here </h4>
				</div>
				<div class="modal-body customer-box">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
						<li><a class="active" href="#Login" data-toggle="tab">Enter Scratch Card Details (N5900)</a></li>
						<img src="images/logo.png" alt="" height="100" width="100" />

					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="Login">
							<?php
							include('form.php');
							?>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->

	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img style="width: 65px; border-radius: 5pc" src="images/BEST-LOGO.jpg" alt="" />
					<h2 style="margin-left: 92px; margin-top: -45px; font-size: 28px; font-weight:bold; color: white;">THE BEST COLLEGE</h2>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item active"><a class="nav-link" href="programms.php">Programms</a></li>
						<li class="nav-item active"><a class="nav-link" href="institute.php">Institutions</a></li>
						<li class="nav-item active"><a class="nav-link" href="about.php">About Us</a></li>
						<li class="nav-item active"><a class="nav-link" href="contactus.php">Contact Us</a></li>
						<ul class="nav navbar-nav navbar-right">
							
							<li><a class="hover-btn-new log orange" href="/oams2/registraton.php"><span>Registration</span></a></li>
							<li><a class="hover-btn-new log orange" href="/oams2/login.php"><span>Login</span></a></li>
						</ul>

					</ul>

				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
			<li data-target="#carouselExampleControls" data-slide-to="3"></li>
			<li data-target="#carouselExampleControls" data-slide-to="4"></li>
			<li data-target="#carouselExampleControls" data-slide-to="5"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/slider2.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2 style="margin-right:20px;"><strong>Online </strong>Admission Management System</h2>	
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/sliderno2.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">Online <strong>Admission Management System</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft"></p>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/sliderno3.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>Online </strong>Admission Management System</h2>
										<p class="lead" data-animation="animated fadeInLeft"></p>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/sliderno4.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>Online </strong>Admission Management System</h2>
										<p class="lead" data-animation="animated fadeInLeft"></p>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/sliderno5.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>Online </strong>Admission Management System</h2>
										<p class="lead" data-animation="animated fadeInLeft"></p>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/sliderno6.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>Online </strong>Admission Management System</h2>
										<p class="lead" data-animation="animated fadeInLeft"></p>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                </div>
            </div><!-- end title -->
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>New Student Orientation</h4>
                        <h3>Modern University is a leading higher educational establishment offering students from all over the world a chance to obtain new knowledge, learn new useful skills, and find friends for a lifetime. Below are some interesting facts about us. </h2>
                        <p>&nbsp;</p>

                        <a href="#" class="hover-btn-new orange"><span>Learn More</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/blog_6.jpg" alt="" width="530" height="420" class="img-fluid img-rounded">                    </div>
                    <!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
                
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/sliderno4.jpg" alt="" width="530" height="420" class="img-fluid img-rounded">                    </div>
                    <!-- end media -->
                </div><!-- end col -->
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>Course Selection & Scheduling</h4>
                        <h3>Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus mus. Nulla dui. 
             </h2>
                        <p>&nbsp;</p>

                        <a href="#" class="hover-btn-new orange"><span>Learn More</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>New Student Orientation </h4>
                        <h2>Welcome to Online Student Admission System </h2>
                        <p>&nbsp;</p>

                        <a href="#" class="hover-btn-new orange"><span>Learn More</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/sliderno6.jpg" alt="" width="530" height="420" class="img-fluid img-rounded">                    </div>
                    <!-- end media -->
                </div><!-- end col -->
			</div>
		  <div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn"></div>
                    <!-- end media -->
                </div><!-- end col -->
              <!-- end col -->
            </div>
			<!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	<!-- end section -->
	<!-- end section -->
	<!-- end section -->
	<!-- end section -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<!-- end col -->
				<!-- end col -->
				<!-- end col -->
			</div>
			<!-- end row -->
		</div><!-- end container -->
	</footer><!-- end footer -->

	<?php

	include('footer.php');
	?>

	<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/all.js"></script>
	<!-- ALL PLUGINS -->
	<script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>

</html>