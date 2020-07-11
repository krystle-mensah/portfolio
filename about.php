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
    <title>About</title>
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

    <section id="about">
      <div class="about-container">

        <div class="page-title">
          <h1 class="the-about-title the-page-title">skills</h1>
        </div>

        <div class="about-wrapper">
          <!-- div 1 -->
          <div class="skills-container">
            <h3 class="skill-title">HTML</h3 class="skill-title">
            <div class="skills-content">
              <div class="skills html">90%</div>
            </div>
  
            <h3 class="skill-title">CSS</h3 class="skill-title">
            <div class="skills-content">
              <div class="skills css">80%</div>
            </div>
  
            <h3 class="skill-title">JavaScript</h3 class="skill-title">
            <div class="skills-content">
              <div class="skills js">65%</div>
            </div>
  
            <h3 class="skill-title">PHP</h3 class="skill-title">
            <div class="skills-content">
              <div class="skills php">60%</div>
            </div>
          </div>
          <!-- skills-container -->
  
          <!-- div two -->
          <aside class="side-paragraph">
            <h3>About me !</h3>
            <p>
              Frontend developer at Imedia8, currently living in London.
              Available for freelance and contract work in London or remotely.
            </p>
          </aside>
          <!-- SIDE-PARAGRAPH -->
        </div><!-- about-wrapper -->

      </div> <!-- about-container -->
    </section>
    <!-- ABOUT -->

    <footer>
      <p>&copy;2020 Krystle Mensah | All rights reversed</p>
    </footer>

    <script src="js/mobile.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
