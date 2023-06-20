<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Import Export and Logistics Company Web</title>

    <!--Font-->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,400;1,100&display=swap"
      rel="stylesheet"
    />

    <!--Icons-->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!--Navbar 1-->
    <nav class="navbar">
      <a href="#" class="navbar-logo">
        <img
          src="logo.png"
          alt="Logo"
          style="width: 32px"
        />
      </a>


      <div class="navbar-nav">
        <a href="index.php">Home</a>
        <a href="ourbusiness.php">Ourbusinesses</a>
        <a href="news.php">News</a>
        <a href="sustainability.php">Sutainability</a>
        <a href="about.php">About Us</a>
        <a href="career.php">Career</a>
        <a href="contact.php">Contact</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"
          ><i><i data-feather="search"></i></i
        ></a>
        <a href="#" id="menu-menu"
          ><i><i data-feather="menu"></i></i
        ></a>
        <?php
        // Include the userinfo.php file to access the necessary functions and classes
        include 'userinfo.php';
        ?>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
      <div class="hero-content"></div>
    </section>
    <!-- Hero Section Done -->
    
    <!--Contact Us-->
    <div class="contact-map-container">
      <div class="contact">
        <h1>Contact Us</h1>
        <br />
        <h2>Office</h2>
        <p>Our office is located at 123 Main Street, Anytown USA.</p>
        <br />
        <h2>Factory</h2>
        <p>Our factory is located at 456 Industrial Drive, Anytown USA.</p>
      </div>
      <div class="map-container">
        <div class="map">
          <br />
          <a
            ><iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15956.232607947284!2d104.03069743965764!3d1.1184661874261406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98921856ddfab%3A0xf9d9fc65ca00c9d!2sPoliteknik%20Negeri%20Batam!5e0!3m2!1sid!2sid!4v1680541155825!5m2!1sid!2sid"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe
          ></a>
        </div>
      </div>
    </div>
    <!--Contact Us Done-->

    <!--Icons-->
    <script>
      feather.replace();
    </script>

    <!--Javascript-->
    <script src="script.js"></script>
  </body>
</html>
