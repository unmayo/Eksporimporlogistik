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
    <style>
      .footer {
        background-color: #000000;
        padding: 20px;
        text-align: center;
        margin-top: 10%;
      }

      .our-trading {
        text-align: center;
        margin-top: 40px;
      }
      .frame {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 40px;
      }
      .frame img {
        width: 800px;
        height: auto;
        border: 5px solid #1d1d1d;
        border-radius: 10px;
      }
    </style>
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
        <a href="index.php.">Home</a>
        <a href="ourbusiness.php">Ourbusinesses</a>
        <a href="news.php">News</a>
        <a href="sustainability.php">Sutainability</a>
        <a href="about.php">About Us</a>
        <a href="career.php">Career</a>
        <a href="contact.php">Contact</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search">
          <i data-feather="search"></i>
        </a>
        <a href="#" id="menu-menu">
          <i data-feather="menu"></i>
        </a>
        <?php include 'userinfo.php'; ?>
      </div>
    </nav>
    <!--Navbar Done-->

    <!-- Hero Section -->
    <section class="hero">
      <div class="hero-content"></div>
    </section>
    <!-- Hero Section Done -->

    <!-- Our Trading -->
    <section class="our-trading">
      <h2>Our Trading</h2>
    </section>
    <!-- Our Trading Done -->

    <!-- Frame with Photo -->
    <section class="frame">
      <img src="Industry.webp" alt="Photo" />
    </section>
    <!-- Frame with Photo Done -->

    <!--Footer-->
    <footer class="footer">
      <p>&copy; 2023 Your Company Name. All rights reserved.</p>
      <div class="footer-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Disclaimer</a>
      </div>
    </footer>
    <!--Footer-->

    <!--Icons-->
    <script>
      feather.replace();
    </script>

    <!--Javascript-->
    <script src="script.js"></script>
  </body>
</html>
