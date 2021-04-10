<!DOCTYPE html>
<html lang="en">
<?php //include('admin/db.php'); 
?>

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
  <title>Krystle Mensah | Web Developer</title>
</head>

<body>
  <header class="hidden-on-small-screens">

    <?php
    // $query = "SELECT * FROM users";
    // $select_all_posts_query = mysqli_query($connection, $query);
    // while ($row = mysqli_fetch_array($select_all_posts_query)) {
    //   echo   $user = $row['user'];
    // }
    ?>

    <div class="header-container">
      <div class="logo-container">
        <h1 class="logo">Krystle Mensah</h1>
      </div>
      <!-- logo-container -->
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
        <!-- <a href="about.php">about</a> -->
        <a href="contact.php">contact</a>
      </div>

    </div><!-- topnav -->
  </div>
  <!-- MOBILE-CONTAINER -->
  <section id="showcase">
    <div class="showcase-container">
      <!-- DATA is a html5 attribute that allows custom stuff. data-words is an array of javascript objects -->
      <h1 class="the-showcase-title the-page-title ">
        Hi, I'm a
        <span class="txt-type" data-wait="3000" data-words='["Developer", "Designer", "Musician"]'></span>
      </h1>
      <h2>
        welcome to my website
      </h2>
    </div>
    <!-- showcase-container -->
  </section>
  <!-- showcase -->
  <footer>
    <p>&copy;2020 Krystle Mensah | All rights reversed</p>
  </footer>
  <script src="js/mobile.js"></script>
  <script src="js/main.js"></script>
</body>

</html>