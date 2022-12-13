<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
  $url = "https://";
 else
  $url = "http://";
 // Append the host(domain name, ip) to the URL.
$url.= $_SERVER['HTTP_HOST'];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.office365.com';
$mail->Port       = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth   = true;
$mail->Username = 'abhishekbtechcs39@shooliniuniversity.com';
$mail->Password = '(/#MR37v.wK.6pc';
$mail->SetFrom('abhishekbtechcs39@shooliniuniversity.com');

 ?>
