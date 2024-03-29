<?php    
session_start();  
    if(isset($_POST['login']))
    {
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $password = mysqli_real_escape_string($conn, $password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $sql = "select * from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
    
        if($count == 1){
            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
        echo "<script>window.location.href='Home.php';</script>";
            
        }  
        else{  
            echo "<script>window.location.href='login.html'; alert('Invalid Username OR Password')</script>";  
        }
    }
if(isset($_POST['signup ']))
{
    echo "<script>window.location.href='signup.html';</script>";  
}
?>