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

    <section id="showcase">
      <div class="showcase-container">
        <!-- DATA is a html5 attribute that allows custom stuff. data-words is an array of javascript objects -->
        <h1 class="the-showcase-title the-page-title ">
          Hi, I'm a
          <span
            class="txt-type"
            data-wait="3000"
            data-words='["Developer", "Designer", "Musician"]'
          ></span>
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
