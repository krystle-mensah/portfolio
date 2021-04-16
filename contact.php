<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <!-- css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- <link rel="stylesheet" href="css/mobile.css" /> -->
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
      </div><!-- logo-container -->

      <nav>
        <div class="nav-container">
          <a href="index.php">home</a>
          <a href="portfolio.php">portfolio</a>
          <!-- <a href="about.php">about</a> -->
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

      <a class="mobile_brand_name" href="index.php">
        <h1 class="logo">Krystle Mensah</h1>
      </a><!-- moblie_brand_name -->

      <span class="open_slide">
        <a class="hamburger_icon" href="#" onClick="openSlideMenu()">
          <i class="fa fa-bars"></i>
        </a><!-- onclick-->
      </span>

      <div id="side_menu" onClick="closeSlideMenu()" class="side_nav">
        <a href="#" class="btn_close">&times;</a>
        <a href="index.php">home</a>
        <a href="portfolio.php">portfolio</a>
        <a href="contact.php">contact</a>
      </div>

    </div><!-- topnav -->
  </div>
  <!-- MOBILE-CONTAINER -->

  <section id="contact">
    <div class="contact-container">

      <div class="page-title">
        <h1 class="contact_title the-page-title">contact</h1>
      </div>
      <div class="contact-wrapper">
        <div class="company-info">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.216446521434!2d-0.19690998480919586!3d51.45418232241468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760f66df5ea103%3A0xaf1c1c365f7960be!2sNeville%20Gill%20Cl%2C%20Wandsworth%2C%20London%20SW18%204BP!5e0!3m2!1sen!2suk!4v1580053495192!5m2!1sen!2suk" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div><!-- company-map -->

        <div class="contact">
          <?php
          $Msg = "";
          if (isset($_GET['success'])) {
            $Msg = "Message has been sent";
            echo  $Msg;
          }
          if (isset($_GET['error'])) {
            $Msg = "Message could not be sent";
            echo  $Msg;
          }
          ?>

          <!-- form -->
          <form method="post" action="mail.php">
            <p>
              <label for="fname">First Name</label>
              <input type="text" name="firstname" id="first_name" value="<?php echo isset($_POST['firstname']) ? $first_name : '' ?>" />
            </p>
            <p>
              <label for="lname">Last Name</label>
              <input type="text" name="lastname" id="last_name" value="<?php echo isset($_POST['lastname']) ? $last_name : '' ?>" />
            </p>
            <p>
              <label for="email">Your Email</label>
              <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $email : '' ?>" />
            </p>
            <p>
              <label for="country">Country</label>
              <select id="country" name="country" value="<?php echo isset($_POST['country']) ? $country : '' ?>">
                <option value="australia">Select</option>
                <option value="australia">London</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
              </select>
            </p>
            <p class="full">
              <label for="subject">Subject</label>
              <textarea id="subject" name="message" value="<?php echo isset($_POST['subject']) ? $message : '' ?>" style="height:170px"></textarea>
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
    <p><?php echo date("Y"); ?> &#169; Krystle Mensah | All rights reversed</p>
  </footer>

  <script src="js/mobile.js"></script>
</body>

</html>