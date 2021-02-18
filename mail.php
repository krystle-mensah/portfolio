<?php
session_start();

// messages variables
$_SESSION['msg'] = '';
$_SESSION['msgClass'] = '';


//check form submits
if (filter_has_var(INPUT_POST, 'submit')) {
  //check if submitted that you get this message
  //echo "Submitted";

  //also send user back to contact page.
  header("Location: contact.php");

  // also collect user form data 
  $first_name = htmlspecialchars($_POST['firstname']);
  $last_name = htmlspecialchars($_POST['lastname']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);
  $country = htmlspecialchars($_POST['country']);

  //check that the fields are not empty
  if (!empty($first_name) && !empty($last_name) && !empty($email) && !empty($message) && !empty($country)) {

    $to_email = 'krystle.mensah@gmail.com';
    $subject = 'Contact Request From: ' . $first_name;
    $body = '<h2>Contact Request</h2> 
          <h4>First Name</h4><p>' . $first_name . '</p> 
          <h4>Last Name</h4><p>' . $last_name . '</p> 
          <h4>Email</h4><p>' . $email . '</p>
          <h4>Message</h4><p>' . $message . '</p>
        ';

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type:text/html;charset=UTF-8" . "
        \r\n";
    $headers .= "From: " . $first_name . "<" . $email . ">" . "\r\n";

    if (mail($to_email, $subject, $body, $headers)) {
      // email sent
      $_SESSION['msg'] = "Your email has been sent";
      $_SESSION['msgClass'] = "alert-success";
    } else {
      // then if it fails
      $_SESSION['msg'] = "Your email was not send";
      $_SESSION['msgClass'] = "alert-danger";
    }
  } else {
    //  fail
    $_SESSION['msg'] = "Please fill in all fields";
    $_SESSION['msgClass'] = "alert-danger";
  }
}
