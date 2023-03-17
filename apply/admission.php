<?php 
session_start();
error_reporting(1);
// include 'header.php';
include('../connect.php');
?>

<!DOCTYPE html>
<html>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-social.css" rel="stylesheet">
    <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="bootstrap/html5shiv.js"></script>
      <script src="bootstrap/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/js/jquery-1.9.0.min.js"></script>
    <style type="text/css">
</head>

<style>
  html {
    height: 100%;
  }

  .style1 {
  color: #000000;
  font-weight: bold;
}

.navbar-header{
  padding: 10px;
}
.navbar-brand{
  margin: 2px 40px;
}


  #grad1 {
    background-color: #9C27B0;
    background-image: linear-gradient(120deg, #FF4081, #81D4FA);
  }

  #msform {
    text-align: center;
    position: relative;
    margin-top: 20px
  }

  #msform fieldset .form-card {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    padding: 20px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    margin: 0 3% 20px 3%;
    position: relative
  }

  #msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative;
    margin-bottom: 40px;
  }

  #msform fieldset:not(:first-of-type) {
    display: none
  }

  #msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E
  }

  #msform input,
  #msform textarea {
    padding: 0px 8px 4px 8px;
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 16px;
    letter-spacing: 1px
  }

  #msform input:focus,
  #msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border-bottom: 2px solid skyblue;
    outline-width: 0
  }

  #msform .action-button {
    width: 100px;
    background: skyblue;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
  }

  #msform .action-button:hover,
  #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
  }

  #msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
  }

  #msform .action-button-previous:hover,
  #msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
  }

  select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px
  }

  select.list-dt:focus {
    border-bottom: 2px solid skyblue
  }

  .card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative
  }

  .fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 20px;
    font-weight: bold;
  }

  #progressbar {
    margin-bottom: 30px;
    margin-left: 50px;
    overflow: hidden;
    color: lightgrey
  }

  #progressbar .active {
    color: #000000
  }

  #progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 25%;
    float: left;
    position: relative
  }

  #progressbar #account:before {
    font-family: FontAwesome;
    content: "\f023"
  }

  #progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
  }

  #progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f09d"
  }

  #progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
  }

  #progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
  }

  #progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
  }

  #progressbar li.active:before,
  #progressbar li.active:after {
    background: skyblue
  }

  .radio-group {
    position: relative;
    margin-bottom: 25px
  }

  .radio {
    display: inline-block;
    width: 204;
    height: 104;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor: pointer;
    margin: 8px 2px
  }

  .radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
  }

  .radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
  }

  .fit-image {
    width: 100%;
    object-fit: cover
  }

</style>

<?php




//update scratch card status
$sqli = " update scratchcard set status='1' where serial='" . $_SESSION['serial'] . "'";
if (mysqli_query($conn, $sqli)) {
}



date_default_timezone_set('Africa/Lagos');
$current_date = date('Y-m-d');

if (isset($_POST["btnsubmit"])) {

  //Get application ID
  function applicationID()
  {
    $string = (uniqid(rand(), true));
    return substr($string, 0, 5);
  }

  $applicationID = "ADM/" . date("Y") . "/" . applicationID();


  $fullname = $_POST['txtfullname'];
  $sex = $_POST['gender'];
  $phone =  $_POST['txtphone'];
  $email =  $_SESSION['uemail'];
  $lga =  $_POST['txtlga'];
  $state =  $_POST['txtstate'];
  $jambno =  $_POST['txtjambno'];
  $jamb_score = $_POST['jamb_score'];
  $faculty =  $_POST['txtfaculty'];
  $dept =  $_POST['txtdept'];
  $exam =  $_POST['txtexam'];
  // other
  $blood_group =  $_POST['blood_group'];
  $how_did_know =  $_POST['how_did_know'];
  $disability =  $_POST['disability'];
  $religion =  $_POST['religion'];
  $hafiz =  $_POST['hafiz'];
  $program =  $_POST['program'];
  $category1 = $_POST['category1'];
  $category2 = $_POST['category2'];
  $category3 =  $_POST['category3'];
  $category4 =  $_POST['category4'];
  $subject =  $_POST['subject'];
  $subject1 =  $_POST['subject1'];

  $file_name =  $_FILES['image']['name'];
 $file_size =  $_FILES['image']['size'];
 $file_tmp = $_FILES['image']['tmp_name'];
 $file_type =  $_FILES['image']['type'];

if(move_uploaded_file($file_tmp, "images/". $file_name)){
    echo"<script>console.log('file uploaded successfully')</script>";
    }

else{
     echo"<script>console.log('file did not uploaded successfully')</script>";
}



  $status = '0';

  $sql = mysqli_query($conn, "INSERT INTO admission (fullname,sex,phone,email,lga,state,jamb_number,faculty,dept,ssce_details,status,date_admission,applicationID,blood_group,how_did_know,disability,religion,hafiz,program,category,category2, category3,category4,subject,subject1,photo) VALUES ( '$fullname','$sex','$phone','$email','$lga','$state','$jambno','$faculty','$dept','$exam','$status','$current_date','$applicationID','$blood_group','$how_did_know','$disability','$religion','$hafiz','$program','$category1','$category2','$category3','$category4','$subject','$subject1','$file_name')") or die(mysqli_error($conn));


  //check if jamb number already exist
  // $sql_u = "SELECT * FROM admission WHERE jamb_number='$jambno'";
  // $res_u = mysqli_query($conn, $sql_u);
  // if (mysqli_num_rows($res_u) > 0) {
  //   $msg_error = "Jamb number already exist";
  // } else {
  //   //check if  email already exist
  //   $sql_u = "SELECT * FROM admission WHERE email='$email'";
  //   $res_u = mysqli_query($conn, $sql_u);
  //   if (mysqli_num_rows($res_u) > 0) {
  //     $msg_error = "Email already exist";
  //   } else {
  // echo $fullname;
  // $sql = "INSERT INTO admission (fullname,sex,phone,email,lga,state,jamb_number,jamb_score,faculty,dept,ssce_details,ssce,status,photo,date_admission,applicationID,blood_group,how_did_know,disability,religion,hafiz,program,category)VALUES( '$fullname','$sex','$phone','$email','$lga','$state','$jambno','$jambscore','$faculty','$dept','$exam','$credential','$status','$photo','$current_date','$applicationID','$blood_group','$how_did_know','$disability','$religion','$hafiz','$program','$category')";
  // $sql = "INSERT INTO admission (fullname,sex,phone,email,lga,state,jamb_number,jamb_score,faculty,dept,ssce_details,ssce,status,photo,date_admission,applicationID)VALUES( '$fullname','$sex','$phone','$email','$lga','$state','$jambno','$jamb_score','$faculty','$dept','$exam','$credential','$status','$photo','$current_date','$applicationID')";

  if ($conn->query($sql) === TRUE) {

    $_SESSION['email'] = $email;
    $_SESSION['fullname'] = $fullname;
    $_SESSION['ApplicationID'] = $applicationID;
?>
    <script>
      window.location.href = "http://localhost/oams2/apply/apply-alert.php";
    </script>
  <?php
    header("Location:/oams2/user/apply-alert.php");
  } else {
  ?>
    <script>
      window.location.href = "http://localhost/oams2/apply/apply-alert.php";
    </script>
    <?php
    header("Location:/oams2/user/apply-alert.php");

    ?>

<?php
  }
  // }
  // }
}

header("Location:/oams2/user/apply-alert.php");

?>
<div class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" ><span class="glyphicon glyphicon-home"></span> Application Form| Online Admission Management System</a>
        </div>
        <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1" >
         
        </div>
      </div>
    </div>

<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
  <div class="row justify-content-center mt-0">
    <div class="col-11 col-sm-2 col-md-3 col-lg-3"></div>
    <div class="col-11 col-sm-8 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
      <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
        <h2><strong>Sign Up Your User Account</strong></h2>
        <p>Fill all form field to go to next step</p>
        <div class="row">
          <div class="col-md-12 mx-0">
            <form id="msform" class="form-horizontal contactform" action="admission.php" method="post" enctype="multipart/form-data">

              <!-- progressbar -->
              <ul id="progressbar">
                <li class="active" id="account"><strong>Personal</strong></li>
                <li id="personal"><strong> Additional Information</strong></li>
                <li id="payment"><strong>Choose Program</strong></li>
              </ul> <!-- fieldsets -->
              <fieldset>
                <div class="row form-card" style="margin-top: 20px">
                  <h2 class="fs-title text-center">Personal Information</h2>
                  <div class="col-md-6" style="padding-right: 10px;">
                  <input type="text" name="txtfullname" placeholder="Full Name" />
                   <input type="text" name="gender" placeholder="Gender" />
                  <!-- <select class="form-control" name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select> -->
                  <br>
                  <input type="number" name="txtphone" id="txtphone" placeholder="Phone"  />
                  <input type="text" name="mail" id="mail"  value="<?php  echo $_SESSION['uemail']; ?>" disabled/>
                  <input type="text" name="txtlga" id="txtlga" placeholder="Address"  />
                  <input type="text" id="image"  placeholder="Upload Your Photo:"  readonly style="text-align: right; border: none;" />
                  </div>
                  <div class="col-md-6"  style="padding-left: 10px;">
                  <input type="text" name="txtstate" id="txtstate" placeholder="Status"  />
                  <input type="text" name="txtjambno"   id="txtjambno" placeholder="Post Code"  />
                  <input type="text" name="txtfaculty" id="txtfaculty" placeholder="Faculty"  />
                  <input type="text" name="txtdept" id="txtdept" placeholder="Department" />
                  <input type="text" name="txtexam" id="txtexam" placeholder="SSCE(Exam Name/Year)"  />
                  <input type="file" name="image" id="image" accept="image/*" />
                 </div>
                 </div> 
                <input type="button" name="next" class="next action-button" value="Next Step" />
              </fieldset>
              <fieldset>
                <div class="form-card" style="margin-top: 20px">
                  <h2 class="fs-title">Additional Information</h2>
                  <select class="form-control required" id="blood_group" name="blood_group" >
                    <option value="">Select Blood Group</option>
                    <option value="A Negative">A Negative</option>
                    <option value="A Positive">A Positive</option>
                    <option value="B Positive">B Positive</option>
                    <option value="B Negative">B Negative</option>
                    <option value="AB Positive">AB Positive</option>
                    <option value="I don't know">I don't know</option>
                  </select>
                  <br>
                  <select class="form-control required" id="how_did_know" name="how_did_know">
                    <option value="">Select option</option>
                    <option value="Friend / Family">Friend / Family</option>
                    <option value="From IUB Student">From IUB Student</option>
                    <option value="Banner / Billboard">Banner / Billboard</option>
                    <option value="News Paper">News Paper</option>
                    <option value="Social Media">Social Media</option>
                  </select>
                  <br>
                  <div>
                    <label for="disability-s">Disability</label>
                    <select class="form-control" id="disability-s" name="disability">
                      <option value="no">No Disability</option>
                      <option value="have">I have a disability</option>
                    </select>
                  </div>
                  <br>
                  <div>
                    <label for="religion">Religion</label>
                    <select class="form-control required" name="religion" id="religion">
                      <option value="Islam">Islam</option>
                      <option value="Christianity">Christianity</option>
                      <option value="Hinduism">Hinduism</option>
                    </select>

                  </div>
                  <br>
                  <div>
                    <label for="hafiz">Hafeze Quran</label>
                    <select class="form-control required" name="hafiz" id="hafiz">
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>

                  </div>
                </div><input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next Step" />
              </fieldset>
              <fieldset>
                <div class="form-card" style="margin-top: 20px">
                  <h2 class="fs-title">Choose Program</h2>
                  <div>
                    <label for="list_view">Program List View</label>
                    <select name="program" id="list_view"  class="form-control required">
                      <option value="undergraduation_in_arts">Undergraduation in Arts</option>
                      <option value="undergraduation_in_science">Undergraduation in Science</option>
                      <option value="master_in_arts">Master in Arts</option>
                      <option value="master_in_science">Master in Science</option>
                    </select>
                  </div>
                  <br>



                  <div>

                    <label for="program_category">Select Program Category</label>
                    <select name="category1" id="Uarts"  class="form-control required" style="display: none;">
                      <option value="">Select Category</option>
                      <option value="ADP"> ADP ( Associate Degree Program )</option>
                      <option value="ADA">ADA ( Associate Degree in Arts )</option>
                      <option value="BA">BA ( Bachelor of Arts )</option>
                    </select>
                    <select name="category2" id="Uscience"  class="form-control required" style="display: none;">
                      <option value="">Select Category</option>
                      <option value="ADP"> ADP ( Associate Degree Program )</option>
                      <option value="ADS"> ADS ( Associate Degree in Science )</option>
                      <option value="BSC">BSC ( Bachelor of Science )</option>
                    </select>
                    <select name="category3" id="Marts"  class="form-control required" style="display: none;">
                      <option value="">Select Category</option>
                      <option value="MA-English"> MA - English</option>
                      <option value="MA-Special">MA - Special</option>
                      <option value="MA-Education">MA - Education</option>
                      <option value="MA-Urdu"> MA - Urdu</option>
                      <option value="MA-Islamiat">MA - Islamiat</option>
                      <option value="MA-Languages">MA - Languages</option>
                    </select>
                     <select name="category4" id="Mscience"  class="form-control required" style="display: none;">
                      <option value="">Select Category</option>
                      <option value="MCS">  MCS ( Master in Computer Science)</option>
                      <option value="MSC-IT">MSC-IT ( Master in Information Technalogy )</option>
                      <option value="MSC"> MSC ( Master in Science )</option>
                    </select>
                  </div><br>

                  <div>
                    <label for="list_view">Select Subject</label>
                    <select name="subject" id="UnderScience"  class="form-control required" style="display:none;">
                      <option value="">select subject</option>
                      <option value="Double_Computer_and_Phisics">Double Computer and Phisics</option>
                      <option value="Double_Computer_and_Math">Double Computer and Math</option>
                      <option value="Double_Computer_and_Stat">Double Computer and Stat</option>
                      <option value="Double_Computer_and_Ecnomics">Double Computer and Econmics</option>
                    </select>
                    <select name="subject1" id="MasterScience"  class="form-control required" style="display:none">
                      <option value="">select subject</option>
                      <option value="Math">Math</option>
                      <option value="Zology">Zology</option>
                      <option value="Botony">Botony</option>
                      <option value="Chemistry">Chemistry</option>
                      <option value="MBA">MBA</option>
                   

                    </select>
                  </div>


                </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <div><button class="btn btn-primary" type="submit" name="btnsubmit">Submit</button>   </div>


              </fieldset>

              <fieldset>
                <div class="form-card">
                  <h2 class="fs-title text-center">Success !</h2> <br><br>
                  <div class="row justify-content-center">
                    <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                  </div> <br><br>
                  <div class="row justify-content-center">
                    <div class="col-7 text-center">
                      <h5>You Have Successfully Signed Up</h5>
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<script>






  $(document).ready(function() {

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;

    $(".next").click(function() {
     const txtphone =  $("#txtphone").val();
     const mail =  $("#mail").val();
     const txtlga =  $("#txtlga").val();
     const txtstate =  $("#txtstate").val();
     const txtjambno =  $("#txtjambno").val();
     const txtfaculty =  $("#txtfaculty").val();
     const txtdept =  $("#txtdept").val();
     const txtexam =  $("#txtexam").val();
   
if(txtphone && mail && txtlga && txtstate && txtjambno&& txtfaculty && txtdept && txtexam){
  next_fs = $(this).parent().next();
} else {
  alert("Some Filed are Missing")
}

      current_fs = $(this).parent();
      

      //Add Class Active
      $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

      //show the next fieldset
      next_fs.show();
      //hide the current fieldset with style
      current_fs.animate({
        opacity: 0
      }, {
        step: function(now) {
          // for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            'display': 'none',
            'position': 'relative'
          });
          next_fs.css({
            'opacity': opacity
          });
        },
        duration: 600
      });
    });

    $(".previous").click(function() {

      current_fs = $(this).parent();
      previous_fs = $(this).parent().prev();

      //Remove class active
      $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

      //show the previous fieldset
      previous_fs.show();

      //hide the current fieldset with style
      current_fs.animate({
        opacity: 0
      }, {
        step: function(now) {
          // for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            'display': 'none',
            'position': 'relative'
          });
          previous_fs.css({
            'opacity': opacity
          });
        },
        duration: 600
      });
    });

    $('.radio-group .radio').click(function() {
      $(this).parent().find('.radio').removeClass('selected');
      $(this).addClass('selected');
    });

    $(".submit").click(function() {
      // return false;
      // window.location("/oams2/user / index.php");

    })

  });

  $("#list_view").change(function() {
  if ($(this).val() == "undergraduation_in_arts") {
    $("#Uarts").show();
  } else {
    $("#Uarts").hide();
  }

  if ($(this).val() == "undergraduation_in_science") {
    $("#Uscience").show();
  } else {
    $("#Uscience").hide();
  }

  if ($(this).val() == "master_in_science") {
    $("#Mscience").show();
  } else {
    $("#Mscience").hide();
  }

  if ($(this).val() == "master_in_arts") {
    $("#Marts").show();
  } else {
    $("#Marts").hide();
  }

  });


  $("#Uscience").change(function() {
  if ($(this).val() == "BSC") {
    $("#UnderScience").show();
  } else {
    $("#UnderScience").hide();
  }

  });

  $("#Mscience").change(function() {
  if ($(this).val() == "MSC") {
    $("#MasterScience").show();
  } else {
    $("#MasterScience").hide();
  }

  });


</script>

<!-- <script type="text/javascript">
  let list_view = document.getElementById("list_view");
  let selectValue = list_view.options[list_view.selectedIndex].value;
 let program_category = document.getElementById("program_category");

  function getValue(){

if ( selectValue == 'program_wise') {
program_category.style.display = 'program_wise';
}
  }

getValue();

</script> -->

</html>