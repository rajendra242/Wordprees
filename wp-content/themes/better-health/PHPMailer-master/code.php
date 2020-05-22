<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

  require 'PHPMailerAutoload.php';
  require("C:/xampp/htdocs/PHPMailer-master/src/PHPMailer.php");
  require("C:/xampp/htdocs/PHPMailer-master/src/SMTP.php");

$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'rajendrasinhrathod779@gmail.com';                     
    $mail->Password   = 'r1a2t3h4o5d6';                               
    $mail->SMTPSecure = 'ssl';         
    $mail->Port       = 465;           

    // $user_email = $_GET['user_email'];

    $emaiadd = 'rajendrasinhrathod.rao@gmail.com';
    $mail->setFrom('rajendrasinhrathod779@gmail.com', 'Rajendrasinh');
    $mail->addAddress('rajendrasinhrathod.rao@gmail.com', 'Rathod Banna');     

    $mail->isHTML(true);                                  
    $mail->Subject = 'This Email From PHPMailer';
    $mail->Body    = 'hell';
    $mail->AltBody = 'Wellcom To RaoInfotech';

    $mail->send();
    // print_r( 'Message has been sent');
} catch (Exception $e) {
    // print_r("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
}