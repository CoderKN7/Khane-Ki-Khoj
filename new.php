<?php
include("connection.php");
    $username = $_POST['user'];  
    $password = $_POST['pass']; 
    $name= $_POST['name'];
    $query="insert into login(username,password,name) values('$username','$password','$name')";
    echo $query;
    $rs=mysqli_query($conn,$query) ;
    if($rs)
    {
    echo "<script>window.location.href='login.html';</script>";   
    }
    else
    {
    echo "<script>window.location.href='signup.html';</script>"; 
    }
?>