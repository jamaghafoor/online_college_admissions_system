<?php

require '../oams2/connect.php';

if(isset($_FILES['image'])){



$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$father_name = $_POST['father_name'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$cnic = $_POST['cnic'];
$password =$_POST['password'];


//uploading profile photo
$file_name = $_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$file_tmp = $_FILES['image']['tmp_name'];
$file_type = $_FILES['image']['type'];

if(move_uploaded_file($file_tmp, "user/images/". $file_name)){
    echo"<script>console.log('file uploaded successfully')</script>";
    }

else{
     echo"<script>console.log('file did not uploaded successfully')</script>";
}

$select = mysqli_query($conn, "SELECT `email` FROM `registration` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($conn));

if(mysqli_num_rows($select)) {
     header("Location:/oams2/registration-alert.php");
}

else{
     mysqli_query($conn, "INSERT INTO registration(first_name, last_name, father_name,gender,contact,email,cnic,password,photo)
VALUES ('$first_name','$last_name','$father_name','$gender','$contact','$email','$cnic','$password','$file_name')") or die(mysqli_error($conn));
     header("Location:/oams2/signup-alert.php");
}

   

}
  
?>
