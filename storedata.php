<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="popup_style.css">
</head>
<body>

<?php
session_start();
require '../oams2/connect.php';

if (isset($_POST['login_user'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    $errors= array();

    if (empty($email)) {
        array_push($errors, "email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        // echo $password = password_verify($password, PASSWORD_BCRYPT);
        $query = "SELECT * FROM registration WHERE email='$email' AND password='$password'";

        $results = mysqli_query($conn, $query);
       
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['uemail'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header("Location:/oams2/login-alert.php");
        } else {
            array_push($errors, "Wrong email/password combination");
            // print_r($_SESSION);
            header("Location:/oams2/login.php");
            $_SESSION['error'] = ' Wrong Email Address or Password';


        }
    }
}

?>

</body>
</html>
