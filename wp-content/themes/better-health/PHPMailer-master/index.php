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

    $email = $_GET['email'];

    $emaiadd = 'rajendrasinhrathod.rao@gmail.com';
    $mail->setFrom('rajendrasinhrathod779@gmail.com', 'Rajendrasinh');
    $mail->addAddress($email, 'Rathod Banna');     

    $mail->isHTML(true);                                  
    $mail->Subject = 'This Email From PHPMailer';
    $mail->Body    = '
    <body style="  background-image: url(https://i.pinimg.com/originals/5e/be/ad/5ebead6ee44cadad58d597557a1e1cd3.png);
     background-repeat: no-repeat; background-size: 100% 100%;">
    <div style="color:black;font-family: Arial, Helvetica, sans-serif;  text-align: center; ">
       <h1 margin-top: 50px; border: 4px dotted blue; border-radius: 25px;>Wellcom To RaoInfotech</h1>
       <h1 style="text-align: center; margin-top:10px;"><img src="https://raoinformationtechnology.com/theme/images/OG-images/1200-1200.png" style="width:300px; height:200px;"></h1>
      <p style="font-size:20px; color:black; padding:15px;">Rao Infotech is a software engineering and product development firm focused on highly scalable, real-time web and mobile applications and systems. </p>
    </div>
   </body>';
    $mail->AltBody = 'Wellcom To RaoInfotech';

    $mail->send();
    // print_r( 'Message has been sent');
} catch (Exception $e) {
    // print_r("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
}