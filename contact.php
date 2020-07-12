<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <!-- css -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/mobile.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="icon" href="favicon.ico">
  <title>contact</title>
</head>

<body>
  <header class="hidden-on-small-screens">
    <div class="header-container">
      <div class="logo-container">
        <h1 class="logo">Krystle Mensah</h1>
      </div>
      <!-- logo-container -->

      <nav>
        <div class="nav-container">
          <a href="index.php">home</a>
          <a href="portfolio.php">portfolio</a>
          <a href="about.php">about</a>
          <a href="contact.php">contact</a>
        </div>
        <!-- nav-container -->
      </nav>
    </div>
    <!-- header-container -->
  </header>

  <!-- MOBILE -->
  <div class="mobile-container hidden-on-large-screens">
    <!-- Top Navigation Menu -->
    <div class="topnav">
      <a href="#">
        <h1 class="logo">Krystle Mensah</h1>
      </a>

      <!-- <a href="#home" class="active">Logo</a> -->
      <div id="myLinks">
        <a href="index.php">home</a>
        <a href="portfolio.php">portfolio</a>
        <a href="about.php">about</a>
        <a href="contact.php">contact</a>
      </div>
      <a href="javascript:void(0);" class="icon" onclick="mobileToggle()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>
  <!-- MOBILE-CONTAINER -->

  <section id="contact">
    <div class="contact-container">
      
      <div class="page-title">
        <h1 class="the-contact-title the-page-title">contact</h1>
      </div>

      <div class="contact-wrapper">
        <div class="company-info">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.216446521434!2d-0.19690998480919586!3d51.45418232241468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760f66df5ea103%3A0xaf1c1c365f7960be!2sNeville%20Gill%20Cl%2C%20Wandsworth%2C%20London%20SW18%204BP!5e0!3m2!1sen!2suk!4v1580053495192!5m2!1sen!2suk"
            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div><!-- company-map -->

        <div class="contact">
        
        <!-- FORM DATA -->
        <?php

          //message Vars

          $msg = '';
          $msgClass = ''; 

          if(isset($_POST['submit'])){
            //test
            ////echo "Submitted";
            
            // collect Data from user
            $first_name = ($_POST['firstname']);
            $last_name = ($_POST['lastname']);
            $email = ($_POST['email']);
            $message = ($_POST['message']);
            $country = ($_POST['country']);

            //check data required fields. if none of this are empty
            if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($message) && !empty($country)) {
            
              //then we passed
              //function filters the $email with the specified filter if false 
              if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                //then it failed and we send a message
                $msg = 'please use a vaild email address';
                $msgClass = 'alert-danger';


              }
              else {
                // we passed
                // hold the email where you want this to go
                $to_email = 'web-development@krystlemensah.co.uk';
                $subject = 'Contact Request From: '.$first_name;
                $body = '<h2>Contact Request</h2> 
                  <h4>First Name</h4><p>'.$first_name.'</p> 
                  <h4>Last Name</h4><p>'.$last_name.'</p> 
                  <h4>Email</h4><p>'.$email.'</p>
                  <h4>Message</h4><p>'.$message.'</p>
                ';    
                
                // header for email
                $headers = "MIME-Version: 1.0" ."\r\n";
                // add to
                $headers .= "Content-Type:text/html;charset=UTF-8" . "
                \r\n";
                //now we wont the from who this is from. additional header.
                $headers .= "From: " .$first_name. "<".$email.">". "\r\n";

                // now we can use the mail function. if it send if it dosent.
                if(mail($to_email, $subject, $body, $headers)) {
                  // if ture then we send a message. email sent
                  $msg = 'Your email has been sent';
                  $msgClass = 'alert-success';

                } 
                else {
                  //if failed. we sent this 
                  $msg = 'Your email was not send';
                  $msgClass = 'alert-danger';
                }
                
              }

            } 
            else {
            // then failed and put stuff in massage vars
            $msg = 'please fill in all fields';
            $msgClass = 'alert-danger';

            }

          }// END ISSET
        ?>
      
          <!-- if message is not equal to nothing. if that is true then we wont to put out the alert.  -->
          <?php if ($msg != ''): ?><div class="<?php echo $msgClass ?>"><?php echo $msg ?></div><?php endif;?>

          <!-- form -->
          <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>
              <label for="fname">First Name</label>
              <input type="text" name="firstname" id="first_name" value="<?php echo isset($_POST['firstname']) ? $first_name : '' ?>" />
            </p>
            <p>
              <label for="lname">Last Name</label>
              <input type="text" name="lastname" id="last_name" value="<?php echo isset($_POST['lastname']) ? $last_name : '' ?>"  />
            </p>
            <p>
              <label for="email">Your Email</label>
              <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $email : '' ?>" />
            </p>
            <p>
              <label for="country">Country</label>
              <select id="country" name="country" value="<?php echo isset($_POST['country']) ? $country : '' ?>">
                <option value="australia">London</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
              </select>
            </p>
            <p class="full">
              <label for="subject">Subject</label>
              <textarea id="subject" name="message" value="<?php echo isset($_POST['subject']) ? $message : '' ?>"
                style="height:170px"></textarea>
            </p>

            <p class="full">
              <input type="submit" name="submit" value="Submit" />
            </p>
          </form>
        </div><!-- contact -->
      </div><!-- contact-wrapper -->
    </div><!-- contact-container -->
  </section>

  <footer>
    <p>&copy;2020 Krystle Mensah | All rights reversed</p>
  </footer>

  <script src="js/mobile.js"></script>
</body>

</html>