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

      .box {
        margin: 60px auto; /* Memusatkan kotak teks di tengah dan memberikan ruang margin */
        text-align: left; /* Menengahkan teks */
        width: 1000px; /* Lebar kotak teks */
        border: 1px solid #ffffff; /* Tambahkan garis tepi */
        padding: 10px; /* Tambahkan padding ke dalam kotak */
        border-radius: 5px; /* Tambahkan border-radius untuk membuat sudut-sudut yang lebih lembut */
      }

      .box-title {
        font-weight: bold;
        margin-bottom: 20px;
        text-align: left; /* Teks judul berada di sebelah kiri */
      }

      .box p {
        text-align: left; /* Paragraf berada di sebelah kiri */
      }

      .frame {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 40px;
      }

      .frame img {
        max-width: 30%;
        border: 5px solid #474747;
        border-radius: 10px;
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

    <!-- Hero Section -->
    <section class="hero"></section>
    <!-- Hero Section Done -->

    <!-- Frame with Photo -->
    <section class="frame">
      <img src="sustainabilityour.webp" alt="Photo" />
    </section>
    <!-- Frame with Photo Done -->

    <!-- Box 1 -->
    <div class="box">
      <div class="box-title">Traceability Back To Mill</div>
      <div class="box-content">
        <p>
          Traceability to Mill is to ensure the materials supplied to us can be
          tracked back to its mill origin
        </p>
      </div>
    </div>
    <!-- Box 1 Done -->

    <!-- Box 2 -->
    <div class="box">
      <div class="box-title">Traceability Back To Plantation</div>
      <div class="box-content">
        <p>
          Traceability to plantation is to ensure that the materials supplied
          from plantations to the mills, and thereafter to the refinery or for
          shipping/export can be tracked back to its plantation origin.
        </p>
      </div>
    </div>
    <!-- Box 2 Done -->

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
