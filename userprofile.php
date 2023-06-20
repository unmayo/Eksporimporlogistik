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
      /* CSS for Footer */
      .footer {
        background-color: #000000;
        padding: 20px;
        text-align: center;
        margin-top: 10%;
      }

      /* CSS for Profile Section */
      .profile-section {
        font-family: Arial, sans-serif;
        margin: 20px;
      }

      .profile-section h1 {
        text-align: center;
      }

      .profile-section form {
        max-width: 400px;
        margin: 0 auto;
      }

      .profile-section label {
        display: block;
        margin-top: 10px;
      }

      .profile-section input[type="text"],
      .profile-section input[type="email"],
      .profile-section input[type="password"] {
        width: 100%;
        padding: 8px;
        border-radius: 4px;
        border: 1px solid #ccc;
      }

      .profile-section input[type="submit"] {
        background-color: #4caf50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
      }

      .profile-section .profile-image {
        max-width: 200px;
        margin-bottom: 10px;
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
        <a href="index.php">Home</a>
        <a href="ourbusiness.php">Ourbusinesses</a>
        <a href="news.php">News</a>
        <a href="sustainability.html">Sutainability</a>
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
    
    <!-- Form -->
    <?php include 'userprofileB.php'; ?>
    <br />
    <br />
    <div class="profile-section">
      <h1>User Profile Editor</h1>
      <br />
      <div style="text-align: center;">
        <img
          src="<?php echo $userprofile; ?>"
          class="profile-image"
          alt="Profile Image"
        />
      </div>
      <form action="" method="POST" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input
          type="text"
          id="username"
          name="username"
          value="<?php echo $userData['username']; ?>"
        />

        <label for="image">Image:</label>
        <input type="file" id="image" name="image" />

        <label for="email">Email:</label>
        <input
          type="email"
          id="email"
          name="email"
          placeholder="Enter the email address"
          value="<?php echo $userData['email']; ?>"
        />
        <br />
        <br />
        <input type="submit" value="Save Changes" />
      </form>
    </div>
    <!-- Form -->
    
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
