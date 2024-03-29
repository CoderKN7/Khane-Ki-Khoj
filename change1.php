<?php
include('connection.php');
$pass=$_POST['newpass'];
session_start();
$user = $_SESSION['username'];
    

    $query = "update login set password='$pass' where username='$user'";
    echo $query;
    $rs = mysqli_query($conn, $query);
    if ($rs) {
        echo "<script> alert('Password Changed Succesfully');window.location.href='login.html';</script>";
        session_destroy();
    } else {
       echo "<script>alert('unable to change password');window.location.href='Forgot.php';</script>";
    }


?>