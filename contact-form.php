<?php 
if(isset($_POST['submit'])){
  // Data from user
  $first_name = ($_POST['firstname']);
  $first_last = ($_POST['lastname']);
  $mail_from = ($_POST['mail']);
  $country = ($_POST['country']);
  $message = ($_POST['message']);

  $mail_to = "web-development@krystlemensah.co.uk";
  $headers = "From: ".$mail_from;
  $txt = "You have received an e-mail from ". $first_name.".\n\n".$message;  

  mail($mail_to, $txt, $headers);
  header("Location: index.php?mailsend");

} // END ISSET
?>