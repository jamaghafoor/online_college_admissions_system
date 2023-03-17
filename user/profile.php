<?php
session_start();
error_reporting(0);
include('../connect.php');

if(strlen($_SESSION['uemail'])=="")
    {   
    header("Location: login.php"); 
    }
    else{
	}
      
$email = $_SESSION["uemail"];
$query = "SELECT photo, first_name,last_name, father_name,contact,cnic,gender FROM registration WHERE email='$email'";
$results = $conn->query($query);
$rows = mysqli_fetch_array($results);




//Get Date
date_default_timezone_set('Africa/Lagos');
$current_date = date('Y-m-d');


$sql = "SELECT * FROM admission WHERE email='$email'"; 
$result = $conn->query($sql);
$rowaccess = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile|Online Student Admission system</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />


</head>

<body>
    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element" style="text-align: center;"> <span>
                            <img  style="border-radius: 50%;" src="images/<?php echo $rows['photo'];  ?>" alt="image" width="110" height="110" class="img-circle" />
                             </span>
  
   
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"><span class="text-muted text-xs block" style="margin-top: 20px"><?php echo $rows['first_name'];  ?>  </span></span> <!-- <b class="caret"></b></span> </span> --> </a>
                       <!--  <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            
                            <li><a href="logout.php">Logout</a></li>
                        </ul> -->
  </div>	
   
			   <?php
			   include('sidebar.php');
			   
			   ?>
			  </li>
	       </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to DASHBOARD</span>
                </li>
                <li class="dropdown">
                   
                    


                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
               
            </ul>

        </nav>
        </div>

        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-4">
                    <div class="ibox float-e-margins" style="margin-bottom: 0px">
                        <div class="ibox-title">
                            <h5>Profile Detail</h5>
                        </div>
                        <div>
                            <div class="ibox-content border-left-right" style="text-align: center;">
                                <img style="border-radius:10px" src="images/<?php echo $rows['photo'];   ?>" alt="image" width="200" height="210" >                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong><?php echo $rowaccess['fullname'];   ?> </strong></h4>
                               
                                <h5><strong>Application ID</strong>: <?php echo $rowaccess['applicationID'];   ?></h5>
                            </div>
                        </div>
                </div>
                    <!-- </div> -->
                <!-- <div class="col-md-4" style="padding-right: 0px;
    padding-left: 0px;"> -->
                    <div class="ibox float-e-margins">
                        <!-- <div class="ibox-title">
                            <h3>Personal Information</h3>
                           
                        </div> -->
                        <div class="ibox-content">

                            <div>
                                <div class="feed-activity-list">

                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>First Name:</strong> <?php echo $rows['first_name'];  ?><strong> <br>
                                      </div>
                                    </div>
									<div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Last Name:</strong> <?php echo $rows['last_name']; ?><strong><br>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Gender:</strong> <?php echo $rows['gender']; ?><strong><br>
                                        </div>
                                    </div>
									<div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Father Name:</strong> <?php echo $rows['father_name']; ?><strong><br>
                                        </div>
                                    </div>
									<div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Phone :</strong> <?php echo $rows['contact'];  ?><strong>  <br>
                                        </div>
                                    </div>


									<div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Email:</strong> <?php echo $_SESSION["uemail"]; ?><strong> <br>
                                        </div>
                                    </div>
									<div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>CNIC :</strong> <?php echo $rows['cnic']; ?><strong> <br>
                                        </div>
                                    </div>
                                  <!-- <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Date Registration :</strong> <?php echo $rowaccess['date_admission'];   ?> <strong> <br>
                                        </div>
                                    </div> -->
                                </div>
								<!-- <form method="post" action="edit-profile.php">

                                <button class="btn btn-primary btn-block m"><i class="fa fa-edit"></i> Edit Profile</button>

</form> -->

                            </div>

                        </div>
                    </div>

                </div>
                 <div class="col-md-4" style="padding-right: 0px;
    padding-left: 0px;">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h3>Admission information</h3>
                           
                        </div>
                        <div class="ibox-content">

                            <div>
                                <div class="feed-activity-list"  >

                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Fullname :</strong>                    <?php echo $rowaccess['fullname'];   ?><strong> <br>
                                      </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Sex :</strong>                    <?php echo $rowaccess['sex'];   ?>  <strong><br>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Email:</strong>                    <?php echo $rowaccess['email'];   ?>  <strong><br>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Phone :</strong>                    <?php echo $rowaccess['phone'];   ?><strong>  <br>
                                        </div>
                                    </div>


                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Address :</strong>                    <?php echo $rowaccess['lga'];   ?> <strong> <br>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>State :</strong>                    <?php echo $rowaccess['state'];   ?> <strong> <br>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Post Code :</strong>                    <?php echo $rowaccess['jamb_number'];   ?><strong>  <br>
                                        </div>
                                    </div>
                                  <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Date Admission :</strong>                    <?php echo $rowaccess['date_admission'];   ?>  <br>
                                        </div>
                                    </div>
                                     <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Department Applied :</strong>                    <?php echo $rowaccess['dept'];   ?> <br>
                                        </div>
                                    </div>
                                     <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Faculty :</strong>                    <?php echo $rowaccess['faculty'];   ?>  <br>
                                        </div>
                                    </div>
                                    


                                </div>
                                <form method="post" action="edit-profile.php">

                                <button class="btn btn-primary btn-block m"><i class="fa fa-edit"></i> Edit Profile</button>

</form>

                            </div>

                        </div>

                    </div>
            </div>
            <div class="col-md-4" style="padding-right: 0px;
    padding-left: 0px;">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h3 style="visibility: hidden;">Admission information</h3>
                           
                        </div>
                        <div class="ibox-content">

                            <div>
                                <div class="feed-activity-list"  >

                                   <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Blood Group :</strong>                    <?php echo $rowaccess['blood_group'];   ?><strong> <br>
                                      </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Disability :</strong>                    <?php echo $rowaccess['disability'];   ?>  <strong><br>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Email:</strong>                    <?php echo $rowaccess['email'];   ?>  <strong><br>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Religion :</strong>                    <?php echo $rowaccess['religion'];   ?><strong>  <br>
                                        </div>
                                    </div>


                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Hafiz :</strong>                    <?php echo $rowaccess['hafiz'];   ?> <strong> <br>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Program :</strong>                    <?php echo $rowaccess['program'];   ?> <strong> <br>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Categorey :</strong>                    <?php echo $rowaccess['category'];   ?><?php echo $rowaccess['category2'];   ?><?php echo $rowaccess['category3'];   ?><?php echo $rowaccess['category4'];   ?><strong>  <br>
                                        </div>
                                    </div>
                                  <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Subject :</strong>                    <?php echo $rowaccess['subject'];   ?><?php echo $rowaccess['subject1'];   ?>  <br>
                                        </div>
                                    </div>
                                     <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>Is Approved:</strong> <?php if ($rowaccess['status'] == 1) {
                                               echo "Approved";
                                            } else {
                                                echo "Pending";
                                            }   ?> <br>
                                        </div>
                                    </div>
                                     <div class="feed-element">
                                        <a href="#" class="pull-left">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy"></small>
                                            <strong>How did you know:  :</strong>                    <?php echo $rowaccess['how_did_know'];   ?>  <br>
                                        </div>
                                    </div>
                                    


                                </div>
                                <form method="post" action="edit-profile.php" >

                                <button class=" btn-block m" style="visibility: hidden;"><i class="fa fa-edit"></i> Edit Profile</button>

</form>

                            </div>

                        </div>
                        
                    </div>
            </div>
        </div>
        
          
            <div class="footer">
                <?php include('footer.php'); ?>
            </div>
        

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Peity -->
    <script src="js/demo/peity-demo.js"></script>

</body>

</html>
