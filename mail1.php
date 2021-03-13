<?php

session_start();


if (isset($_POST['submit'])) {
  require 'phpmailer/class.phpmailer.php';
  $mail = new PHPMailer;

  $mail->Host = 'stmp.gmail.com';
  $mail->Post = 587;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'tls';
  $mail->Username = 'krystle.mensah@gmail.com';
  //change before uploading to server = mensah8645
  $mail->Password   = '12345';

  //Recipients
  $mail->setFrom($_POST['email'], $_POST['firstname']);
  // not sure about this
  $mail->addAddress('krystle.webdev@gmail.com');
  $mail->addReplyTo($_POST['email'], $_POST['firstname']);

  // Content
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'Form Submittion:' . $_POST['message'];
  $mail->Body    = '<h2>Contact Request</h2> 
  <h4>First Name</h4><p>' . $_POST['firstname'] . '</p> 
  <h4>Last Name</h4><p>' . $_POST['lastname'] . '</p> 
  <h4>Email</h4><p>' . $_POST['email'] . '</p>
  <h4>Message</h4><p>' . $_POST['message'] . '</p>
';
  if (!$mail->send()) {
    $_SESSION['result'] = "Something went wrong please try again.";
    //$result = "Something went wrong please try again.";
  } else {

    $_SESSION['result'] = "Thanks" . $_POST['firstname'] . "for contacting us. We'll get to you soon";

    //$result = "Thanks" . $_POST['firstname'] . "for contacting us. We'll get to you soon";
  }
}
