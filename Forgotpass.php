<!--<?php
include('connection.php');
session_start();
$user=$_POST['user'];
$_SESSION['username']=$user;
if(isset($_POST['getcode']))
{  
   echo "<script>window.location.href='sendmail.php'; alert('Verification Code Sent')</script>";
}
if(isset($_POST['code']))
{   
    $code=$_POST['codee'];
    if($code=="ABCD")
    {
        echo "<script>window.location.href='Change.php';</script>";
    }
}

?>