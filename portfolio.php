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
          <h1 class="portfolio_title the-page-title">portfolio</h1>
        </div><!-- page-title-container -->
      </div>

      <div class="work">
        <div class="work-container">
          <hr class="hidden-on-small-screens">
          <!-- work -->
          <div class="work_item">
            <img class="the-work-image" src="img/washington.jpg" alt="">
            <div class="work_description">
              <h3>Washington University tour</h3>
              <p>work project for imedia8</p>
              <a class="button" href="https://law-wustl.university-tour.com/" target="_blank">view site</a>

              <button id="modal_btn" class="button referance_button">reference</button>

              <div id="my-modal" class="modal">
                <div class="modal-content">
                  <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>L3 SDT - Employer Reference</h2>
                  </div>
                  <div class="modal-body">
                    <embed src="documents/reference.pdf" type="application/pdf" width="100%" height="600px" />
                  </div>
                </div>
              </div>
            </div><!-- work_description -->
          </div><!-- work_item_container -->
          <!-- end work -->

          <hr class="hidden-on-small-screens">

          <!-- work -->
          <div class="work_item">
            <img class="the-work-image" src="img/inspired.jpeg" alt="">
            <div class="work_description">
              <h3>inspired Sound Music Blog</h3>
              <p>Blog with custom content management system</p>
              <a class="button" href="https://inspired-sound.herokuapp.com/" target="_blank">view site</a>
              <a class="button" href="https://github.com/krystle-mensah/inspired" target="_blank">view git</a>
            </div><!-- work_description -->
          </div><!-- work_item -->
          <!-- end work -->

          <!--work-->
          <!-- <div class="work_item">
            <img class="the-work-image" src="img/newman.jpg" alt="">
            <div class="work_description">
              <h3>newman university tour</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur doloribus eligendi quasi sit nihil architecto repellat totam fugiat blanditiis saepe.</p>
              <a class="button" href="https://newman.university-tour.com/" target="_blank">view site</a>
            </div>
          </div> -->
          <!-- end work -->

          <hr class="hidden-on-small-screens">

          <!--work-->
          <!-- <div class="work_item">
            <img class="the-work-image" src="img/ccsnh.jpg" alt="">
            <div class="work_description">
              <h3>ccsnh college tour</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur doloribus eligendi quasi sit nihil architecto repellat totam fugiat blanditiis saepe.</p>
              <a class="button" href="https://ccsnh.college-tour.com/" target="_blank">view site</a>
            </div>
          </div> -->

          <!-- end work -->

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