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
      /* Custom CSS for the desired layout */
      body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        font-family: "Raleway", sans-serif;
        background-color: #0d110f;
        color: #ffffff;
      }

      .container {
        text-align: center;
        padding: 2rem;
        margin-top: 3rem; /* Added margin-top */
      }

      h1 {
        font-size: 2rem;
        font-weight: 400;
        margin-bottom: 1rem;
      }

      p {
        font-size: 1.2rem;
        margin-bottom: 2rem;
      }

      .box-container {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-top: 2rem; /* Added margin-top */
      }

      .box {
        flex: 1;
        background-color: #1d1d1d;
        border-radius: 7px;
        padding: 2rem; /* Decreased padding */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
      }

      .box:nth-child(1)::before {
        content: "Food product";
        margin-bottom: 0.9rem;
        font-size: 32px;
      }

      .box:nth-child(2)::before {
        content: "Herbs & Spices";
        margin-bottom: 0.9rem;
        font-size: 32px;
      }

      .box:last-child::before {
        content: "Essential Oil";
        margin-bottom: 0.9rem;
        font-size: 32px;
      }
    </style>
  </head>
  <body>
    <!--Navbar 1-->
    <nav class="navbar">
      <a href="#" class="navbar-logo">
        <img src="logo.png" alt="Logo" style="width: 32px" />
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
    <div class="container">
      <h1>Our Industry</h1>
      <div class="box-container">
        <div class="box">
          <img
            src="LogisticAndShipping.webp"
            alt="Logistic and Shipping"
            style="width: 100%; height: auto"
          />
        </div>
        <div class="box">
          <img
            src="Trading.webp"
            alt="Trading"
            style="width: 100%; height: auto"
          />
        </div>
        <div class="box">
          <img
            src="Industry.webp"
            alt="Industry"
            style="width: 100%; height: auto"
          />
        </div>
      </div>
    </div>

    <script>
      feather.replace();
    </script>
  </body>
</html>
