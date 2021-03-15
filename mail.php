<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
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
  //echo "submitted";
  try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;
    // who is senting the email                                   //Enable SMTP authentication
    $mail->Username   = 'krystle.mensah@gmail.com';                //SMTP username
    // senders gmail password
    $mail->Password   = 'yycpX2<T!nj?_rMu';                               //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    // this is where the email was sent to
    $mail->setFrom($_POST['email']);
    $mail->addAddress('krystle.webdev@gmail.com');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Message from website';
    $mail->Body    = '<h2>Contact Request</h2> 
    <h4>First Name</h4><p>' . $_POST['firstname'] . '</p> 
    <h4>Last Name</h4><p>' . $_POST['lastname'] . '</p> 
    <h4>Email</h4><p>' . $_POST['email'] . '</p>
    <h4>Message</h4><p>' . $_POST['message'] . '</p>
  ';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //header('Location: contact.php'); // this does work but I need a message on the contact page
    echo 'Message has been sent';
  } catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: {$mail->ErrorInfo}';
  }
}
