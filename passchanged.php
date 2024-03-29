<?php
session_start();
include('connection.php');
if(isset($_POST['pass']))
{   $user=$_SESSION['username'];
    $new=$_POST['newpass'];
    
    $query = "update login set password='$new' where username='$user'";
    echo $query;
    $rs = mysqli_query($conn, $query);
    if ($rs) {
        echo "<script> alert('Password Changed Succesfully');window.location.href='profile.php';</script>";
    } else {
        echo "<script>alert('unable to change password');window.location.href='changepass.php';</script>";
    }
}

?>