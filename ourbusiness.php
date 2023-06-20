<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      /* CSS for Footer */
      .footer {
        background-color: #000000;
        padding: 20px;
        text-align: center;
        margin-top: 10%;
      }

      /* About us */
      .about_us_container {
        display: flex;
        align-items: flex-start;
        margin-top: 50px;
        margin-right: 350px;
        margin-left: 350px;
      }

      .about_us_image {
        flex: 0 0 auto;
        margin-right: 20px; /* Adjust margin as needed */
      }

      .about_us_image img {
        width: 150px;
        height: auto;
        border-radius: 8%;
      }

      .about_us_text {
        flex: 1 1 auto;
      }

      .about_us_container.reverse {
        flex-direction: row-reverse; /* Reverse the order for the second section */
      }

      .about_us_container.reverse .about_us_image {
        margin-left: 20px; /* Adjust margin as needed */
        margin-right: 0;
      }

      .about_us_container.reverse .about_us_text {
        text-align: right; /* Adjust text alignment as needed */
      }
      /* About us end */
    </style>
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
        <a href="#">Sutainability</a>
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
        <?php include 'userinfo.php'; ?>
      </div>
    </nav>

    <!--Navbar Done-->

    <!--Hero Section-->
    <section class="hero" id="home">
      <main class="content"></main>
    </section>
    <!--Hero Section-->

    <!--OurBusiness-->
    <!--INDUSTRY-->
    <div class="about_us_container">
      <div class="about_us_image">
        <img src="placeholder_about.png" alt="Image" />
      </div>

      <div class="about_us_text">
        <h1>INDUSTRY</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <!--TRADING-->
    <div class="about_us_container reverse">
      <div class="about_us_image">
        <img src="placeholder_about.png" alt="New Image" />
      </div>

      <div class="about_us_text">
        <h1>TRADING</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <!--Logistic And Shipping-->
    <div class="about_us_container">
      <div class="about_us_image">
        <img src="placeholder_about.png" alt="Image" />
      </div>

      <div class="about_us_text">
        <h1>LOGISTIC AND SHIPPING</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <!--about us end here-->

    <!--Footer-->
    <footer class="footer">
      <p>&copy; 2023 Great Group Indonesia. All rights reserved.</p>
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
