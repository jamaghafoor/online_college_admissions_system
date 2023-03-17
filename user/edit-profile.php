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

$query = "SELECT photo, first_name FROM registration WHERE email='$email'";
$results = $conn->query($query);
$rows = mysqli_fetch_array($results);


date_default_timezone_set('Africa/Lagos');
$current_date = date('Y-m-d ');

// $sql = "select * from registration where email='.$email.'"; 
// $result = $conn->query($sql);
// $rowaccess = mysqli_fetch_array($result);

if(isset($_POST["btnedit"]))
{

$fullname = mysqli_real_escape_string($conn,$_POST['txtfullname']);
$sex = mysqli_real_escape_string($conn,$_POST['txtsex']);
$phone = mysqli_real_escape_string($conn,$_POST['txtphone']);
$lga = mysqli_real_escape_string($conn,$_POST['txtlga']);
$state = mysqli_real_escape_string($conn,$_POST['txtstate']);
$jamb = mysqli_real_escape_string($conn,$_POST['txtjamb']);
$ssce = mysqli_real_escape_string($conn,$_POST['txtssce']);
$faculty = mysqli_real_escape_string($conn,$_POST['txtfaculty']);
$dept = mysqli_real_escape_string($conn,$_POST['txtdept']);





$sql1 = "UPDATE admission SET fullname='{$fullname}',sex='{$sex}',jamb_number='{$jamb}',state='{$state}',faculty='{$faculty}',dept='{$dept}',ssce_details='{$ssce}' WHERE email='{$email}'";
   
   if (mysqli_query($conn, $sql1)) {
        header("Location: edit-alert.php");
}else{

$_SESSION['error']='Editing Was Not Successful';

}
}
?> 
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Profile|Online Student Admission system</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Morris -->
    <link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

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
                            <img src="images/<?php echo $rows['photo'];  ?>" alt="image" width="110" height="110" class="img-circle" />
                             </span>
  
   
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"><span class="text-muted text-xs block" style="margin-top: 20px"><?php echo $rows['first_name'];  ?> <!-- <b class="caret"></b></span> </span>  --></a>
                       <!--  <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            
                            <li><a href="logout.php">Logout</a></li>
                        </ul> -->
  </div>	
			   <?php
			   include('sidebar.php');
			   
			   ?>
			   
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

				<span class="m-r-sm text-muted welcome-message">Welcome to DASHBOARD.</span>

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
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>Edit Applicants</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-2"></div>
            <div class="col-lg-7" style="margin-bottom: 40PX">
                <div class="ibox float-e-margins">
                   
					
					
					<?php
	$sql = "select * from admission where email='$email'"; 
$result = $conn->query($sql);
$row= mysqli_fetch_array($result);
// echo($row);
					
					?>
                    <div class="ibox-content">
                        <div class="row justify-content-center">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8"><h3 class="m-t-none m-b text-center">Edit Applicant Profile</h3>
             <form  action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group"><strong>
                                    <label>Fullname</label></strong>
                                    <input type="text" size="77" name="txtfullname"  value="<?php echo $row['fullname'];   ?>" class="form-control" required="">
                                    </div>
									<div class="form-group"><label>Sex</label> 
         <select name="txtsex" id="select" class="form-control" required="">
 	 <option value="<?php echo $row['sex'];?>"><?php echo $row['sex'];?></option>
    <option value="Male">Male</option>
   <option value="Female">Female</option>
    </select> 
</div>
				 
                     <div class="form-group"><label>Phone</label>
					  <input type="tel" size="77" name="txtphone" value="<?php echo $row['phone'];   ?>" class="form-control" >
					  </div>
					   
					   <div class="form-group"><label>Address</label>
					  <input type="tel" size="77" name="txtlga" value="<?php echo $row['lga'];   ?>" class="form-control" >
					  </div>
					   <div class="form-group"><label>State</label>
					  <input type="tel" size="77" name="txtstate" value="<?php echo $row['state'];   ?>" class="form-control" >
					  </div>
					   <div class="form-group"><label>Post Code</label>
					  <input type="tel" size="77" name="txtjamb" value="<?php echo $row['jamb_number'];   ?>" class="form-control" >
					  </div>

					   <div class="form-group"><label>SSCE Detail</label>
					  <input type="tel" size="77" name="txtssce" value="<?php echo $row['ssce_details'];   ?>" class="form-control" >
					  </div>	
					   
							   <div class="form-group"><label>Faculty</label>
					  <input type="tel" size="77" name="txtfaculty" value="<?php echo $row['faculty'];   ?>" class="form-control" >
					  </div>
					   <div class="form-group"><label>Department</label>
					  <input type="tel" size="77" name="txtdept" value="<?php echo $row['dept'];   ?>" class="form-control" >
					  </div>		                   
						  
                                    <div style="text-align:center;">
                                         <p>&nbsp;</p>
                                        <button class="btn btn-sm btn-primary m-t-n-xs" type="submit" name="btnedit">
                                        <div align="centre"><strong><i class="fa fa-paste"></i>  Edit Profile</strong></div>
                                        </button>
                                  </div>
                                </form>
                            </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            
           
                 
            
                
          
     
           
      



    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
		

 <div class="footer" style="position:absolute; bottom: 0"><?php  include('footer.php'); ?></div>
</body>

</html>
