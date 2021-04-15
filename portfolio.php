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
  <title>Krystle Mensah | Web Developer</title>
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
          <a href="contact.php">contact</a>
        </div>
        <!-- nav-container -->
      </nav>
    </div><!-- header-container -->
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

  <section class="main">

    <!-- div class container -->
    <div class="portfolio-container">
      <!-- <div class="grid-2"> -->

      <!-- div class center -->
      <div class="page-title">
        <div class="page-title-container">
          <h1 class="the-portfolio-title the-page-title">portfolio</h1>
        </div><!-- page-title-container -->
      </div>

      <div class="work">
        <div class="work-container">

          <!--work-->
          <a class="work_item" href="https://ccsnh.college-tour.com/" target="_blank">
            <div class="work_item_container">

              <img class="the-work-image" src="img/ccsnh.jpg" alt="">

            </div><!-- work_item_container -->
          </a><!-- work_item -->
          <!-- end -->
          <!--work-->
          <a class="work_item" href="https://inspired-sound.herokuapp.com/" target="_blank">
            <div class="work_item_container">

              <img class="the-work-image" src="img/inspired.jpeg" alt="">

            </div><!-- work_item_container -->
          </a><!-- work_item -->
          <!-- end -->

          <!--work-->
          <a class="work_item" href="https://newman.university-tour.com/" target="_blank">
            <div class="work_item_container">

              <img class="the-work-image" src="img/newman.jpg" alt="">

            </div><!-- work_item_container -->
          </a><!-- work_item -->
          <!-- END WORK -->
          <!--WORK-->
          <a class="work_item" href="https://law-wustl.university-tour.com/" target="_blank">
            <div class="work_item_container">

              <img class="the-work-image" src="img/washington.jpg" alt="">

            </div><!-- work_item_container -->
          </a><!-- work_item -->
          <!-- END WORK -->
          <!--WORK-->
          <a class="work_item" href="https://djgear.herokuapp.com/" target="_blank">
            <div class="work_item_container">

              <img class="the-work-image" src="img/djgear.jpg" alt="">

            </div><!-- work_item_container -->
          </a><!-- work_item -->
          <!-- END WORK -->

        </div><!-- work-container -->
      </div><!-- work -->
    </div><!-- portfolio-container -->
  </section>

  <footer>
    <p><?php echo date("Y"); ?> &#169; Krystle Mensah | All rights reversed</p>
  </footer>

  <script src="js/mobile.js"></script>
  <script src="js/main.js"></script>
</body>

</html>