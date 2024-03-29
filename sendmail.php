<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "nishiddubey@gmail.com";
$mail->Password   = "nishid2001nd";
session_start();
$user=$_SESSION['username'];

$mail->IsHTML(true);
$mail->AddAddress($user, "Nishid");
$mail->SetFrom("nishiddubey@gmail.com", "Nishid");
//$mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
//$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject = "Verification Code From Khane Ki Khoj";
$content = "
Hello, <br>
Your registered  account on Khane Ki Khoj has requested for password change<br>  
<b>Your Verification Code is ABCD</b><br>
if not done by you contact us within 12hrs<br> 
Kind Regards, Khane ki khoj<br><br>

<i>It is an system generated mail please do not reply";

$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
    echo "<script>window.location.href='Forgot.php'; </script>";
}