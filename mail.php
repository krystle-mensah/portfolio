<?php
/*
Import PHPMailer classes into the global namespace
These must be at the top of your script, not inside a function
*/

//define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Include required php mailer files
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

//Instantiation and passing `true` enables exceptions
// create instance of php mailer
$mail = new PHPMailer(true);

// check if the submit is dectected
if (isset($_POST['submit'])) {
  try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'krystle.mensah@gmail.com';
    $mail->Password   = 'yycpX2<T!nj?_rMu';
    $mail->Port       = 587;

    //Recipients
    $mail->setFrom($_POST['email']);
    $mail->addAddress('krystle.webdev@gmail.com');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'New Message from website';
    $mail->Body    = '<h2>Contact Request</h2> 
    <h4>First Name</h4><p>' . $_POST['firstname'] . '</p> 
    <h4>Last Name</h4><p>' . $_POST['lastname'] . '</p> 
    <h4>Email</h4><p>' . $_POST['email'] . '</p>
    <h4>Message</h4><p>' . $_POST['message'] . '</p>';

    $mail->send();
    // then send user back to contact page and send a message
    header('Location: contact.php?success');
  } catch (Exception $e) {
    header('Location: contact.php?error');
  }
} else {
  header("location: contact.php");
}
