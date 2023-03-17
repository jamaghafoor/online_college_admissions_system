<?php

require 'connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];



    mysqli_query($conn, "INSERT INTO contact(name, email,phone,subject,message)
VALUES ('$name','$email','$phone','$subject','$message')") or die(mysqli_error($conn));
  
    header("Location:/oams2/contact-alert.php");

?>
