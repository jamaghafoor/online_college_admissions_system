<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Admission Management system</title>
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
	<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;

}

/* Create two equal columns that floats next to each other */
.column1,.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 550px; /* Should be removed. Only for demonstration */
}

.column1{
	color: white;
	padding-left: 30px;
	font-family: sans-serif;

}



/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.column1 h2{
	margin-bottom: 50px;
	margin-top: 20px;
  color: white;
  font-weight: bold;
}

.column1 h1{
	width: 330px;
	text-align: left;
	font-size: 45px;
	line-height: 55px;
	text-transform: uppercase;
  color: white;
  font-weight: bold;
}

.column1 a{
	color: white;
	text-decoration: none;
	padding: 15px 20px;
	background: red;
	border-radius: 50px;
}
.readmore{
	margin-top: 50px;
}

</style>
</head>
<body>
<?php
include'header.php';
?>


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
        <div id="home" class="first-section" style="background-image:url('images/aspire.jpg');">
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
        <div id="home" class="first-section" style="background-image:url('images/punjab.jpg');">
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
        <div id="home" class="first-section" style="background-image:url('images/ucp.jpg');">
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
        <div id="home" class="first-section" style="background-image:url('images/superior.jpg');">
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





<div class="row">
  <div class="column" style="background: url('images/punjab.jpg');background-position: center;background-size: cover;">
  </div>
  <div class="column1" style="background: url('images/punjab1.png');background-position: center;background-size: cover;">
    <h2>ABOUT US</h2>
    <p>Punjab Group of Collages</p>
    <h1>LARGEST EDUCATIONAL NETWORK IN PAKISTAN, SINCE 1985.</h1>
   <div class="readmore" > <a href="https://www.pgc.edu/">Read More</a> </div>
  </div>
</div>

<div class="row">
  <div class="column1" style="background: url('images/ucp1.jpg'); background-position: center;background-size: cover;">
  	<h2>ABOUT US</h2>
  	<p>University of Centeral Punjab</p>
    <h1>Training Programs From World Class Experts</h1>
   <div class="readmore" > <a href="https://www.ucp.edu.pk/">Read More</a> </div> 
  </div>
  <div class="column" style="background: url('images/ucp.jpg');background-position: center;background-size: cover; ">
  </div>
</div>

<div class="row">
  <div class="column" style="background: url('images/aspire.jpg');background-position: center;background-size: cover;">
  </div>
  <div class="column1" style="background: url('images/aspire1.jpg');background-position: center;background-size: cover;">
    <h2>ABOUT US</h2>
    <p>Aspire Group of Collages</p>
    <h1>WE HAVE MANY SPECIAL THINGS FOR YOU.</h1>
   <div class="readmore" > <a href="https://www.aspirecolleges.edu.pk/">Read More</a> </div> 
  </div>
</div>

<div class="row">
  <div class="column1" style="background: url('images/superior1.png'); background-position: center;background-size: cover;">
  	<h2>ABOUT US</h2>
  	<p>Superior Group of Collages</p>
    <h1>Superior University Programs From Experts</h1>
   <div class="readmore" > <a href="https://www.superiorcolleges.edu.pk/">Read More</a> </div> 
  </div>
  <div class="column" style="background: url('images/superior.jpg');background-position: center;background-size: cover; ">
  </div>
</div>

<!-- start copyrights -->
         <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name style1">All Rights Reserved. &copy; 2021  Designed By : Group 1 The Best College Bahawalpur </p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

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
