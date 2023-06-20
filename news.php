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
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,400;1,100&display=swap" rel="stylesheet" />
    <!--Icons-->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="style.css" />
    <style>
      /* CSS for Footer */
      .footer {
        background-color: #000000;
        padding: 20px;
        text-align: center;
        margin-top: 10%;
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
            <a href="index.php">Home</a>
            <a href="ourbusiness.php">Ourbusinesses</a>
            <a href="news.php">News</a>
            <a href="sustainability.php">Sutainability</a>
            <a href="about.php">About Us</a>
            <a href="career.php">Career</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="#" id="menu-menu"><i data-feather="menu"></i></a>
            <?php include 'userinfo.php'; ?>
        </div>
    </nav>
    <!--Navbar Done-->
    <!--Hero Section-->
    <section class="hero" id="home">
        <main class="content"></main>
    </section>
    <!--Hero Section-->
    <!--main stuff start-->
    <!-- Huge Title -->
    <h1 class="filter-title">News And Events</h1>
    <!-- Container for Filter and Main Content -->
    <div class="container">
            <!-- PHP code to include newsdata.php -->
            <?php include 'newsdata.php'; ?>
        </div>  
    </div>       
    
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
