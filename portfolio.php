<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/mobile.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
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
            <a href="about.php">about</a>
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

              <!--WORK-->
              <div class="work">
                <img class="the-work-image" src="img/work-1.jpg" alt="">
                <!-- work link -->
                <div class="work-link">
                  <a class="the-work-link" href="https://ccsnh.college-tour.com/"  target="_blank">live site</a>
                </div><!-- work_link -->
              
              </div><!-- work -->
              <!-- END WORK -->
              <!--WORK-->
              <div class="work">
                <img class="the-work-image" src="img/work-1.jpg" alt="">
                <!-- work link -->
                <div class="work-link">
                  <a class="the-work-link" href="https://ccsnh.college-tour.com/"  target="_blank">live site</a>
                </div><!-- work_link -->
              </div><!-- work -->
              <!-- END WORK -->
              <!--WORK-->
              <div class="work">
                <img class="the-work-image" src="img/work-1.jpg" alt="">
                <!-- work link -->
                <div class="work-link">
                  <a class="the-work-link" href="https://ccsnh.college-tour.com/"  target="_blank">live site</a>
                </div><!-- work_link -->
              </div><!-- work -->
              <!-- END WORK -->
              <!--WORK-->
              <div class="work">
                <img class="the-work-image" src="img/work-1.jpg" alt="">
                <!-- work link -->
                <div class="work-link">
                  <a class="the-work-link" href="https://ccsnh.college-tour.com/"  target="_blank">live site</a>
                </div><!-- work_link -->
              </div><!-- work -->
              <!-- END WORK -->

            </div><!-- work-container -->
          </div><!-- work -->
      </div><!-- portfolio-container -->
    </section>

    <footer>
      <p>&copy;2020 Krystle Mensah | All rights reversed</p>
    </footer>

    <script src="js/mobile.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
