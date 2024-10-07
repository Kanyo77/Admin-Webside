<?php

include "../Database/mailsetting.php";
include "../Database/sendmail.php";

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings                    //Enable verbose debug output
    // $mail->isSMTP();                                            //Send using SMTP
    // $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
    // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    // $mail->Username   = 'ba1c948f0ce06d';                     //SMTP username
    // $mail->Password   = 'faa1dbd9dd1172';                               //SMTP password         //Enable implicit TLS encryption
    // $mail->Port       = 2525;    
    
    while($ro =mysqli_fetch_array($row)) {                            
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = $ro["sever"];                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $ro["username"];                      //SMTP username
    $mail->Password   = $ro["password"];                                //SMTP password         //Enable implicit TLS encryption
    $mail->Port       = $ro["post"];  
    }
    
    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    // $mail->isHTML(true);                                  //Set email format to HTML
    // $mail->Subject = 'Title';
    // $mail->Body    = 'Content';
    // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


  while($ro2 =mysqli_fetch_array($data)) {    
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $ro2["title"];  
    $mail->Body    = $ro2["content"];  
  }  
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}