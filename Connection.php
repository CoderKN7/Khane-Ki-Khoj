<?php

$server = 'localhost:3308';
$user = 'root';
$pwd = 'root';
$db = 'khane ki khoj';


$conn = new mysqli($server, $user, $pwd, $db);

if($conn->connect_error)
{
    die('connection failed'. $conn->connect_error ); 
}



?>