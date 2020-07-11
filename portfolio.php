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
      </div>
      <!-- header-container -->
    </header>

    <!-- MOBILE -->
    <div class="mobile-container hidden-on-large-screens">
      <!-- Top Navigation Menu -->
      <div class="topnav">
        <a href="index.php">
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
    
    <!-- section class about -->
    <section class="main">
      
      <!-- div class container -->
      <div class="portfolio-container">
        <div class="grid-2">
          
          <!-- div class center -->
          <div class="page-title">
            <div class="page-title-container">
              <h1 class="the-portfolio-title the-page-title">portfolio</h1>
            </div><!-- page-title-container -->
          </div>

          <!-- this is my 2nd grid item called div -->
          <div class="work">
            <div class="work-container">
              <!--work image  -->
              <div class="work-image">
                <img class="the-work-image" src="img/work-1.jpg" alt="">
              </div><!-- work-image -->
             
              <!-- work links -->
              <div class="work-links">
                <!-- <a class="the-work-link" href="https://bitbucket.org/studentbridge/community-college-system-of-new-hampshire/src/master/" target="_blank">git hub</a> -->
                <a class="the-work-link" href="https://ccsnh.college-tour.com/"  target="_blank">live site</a>
              </div><!-- work-links -->
              
            </div><!-- work-container -->
          </div><!-- work -->

        </div> <!-- grid-2 --> 
      </div><!-- portfolio-container -->
    </section><!-- showcase -->

    <footer>
      <p>&copy;2020 Krystle Mensah | All rights reversed</p>
    </footer>

    <script src="js/mobile.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
