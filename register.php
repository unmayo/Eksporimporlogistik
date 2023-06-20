<?php
include 'koneksi.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form inputs
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate form inputs
    if (empty($username) || empty($email) || empty($password)) {
        $error = "Please fill in all fields.";
    } else {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert user input into the "user" table
        $query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
        if (mysqli_query($koneksi, $query)) {
            $success_message = "Registration successful!";
        } else {
            $error = "Error: " . $query . "<br>" . mysqli_error($koneksi);
        }
    }

    mysqli_close($koneksi);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>

  <style>
    body {
      font-family: "Raleway", sans-serif;
      background-color: var(--bg);
      color: #ffff;
    }

    /* Register */

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: var(--bg);
    }

    .register-container {
      background-color: #244131;
      border-radius: 25px;
      padding: 20px;
      width: 400px;
      color: #fff;
    }

    .register-title {
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 10px;
    }

    label {
      display: block;
      color: #fff;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: none;
      background-color: #fff;
    }

    .register-button {
      background-color: #fff;
      color: #244131;
      padding: 10px 155px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
    }

    .back-button {
      color: #fff;
      text-decoration: none;
    }
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>

  <body>
    <div class="register-container">
      <a href="javascript:history.back()" class="back-button">&#8592; Back</a>
      <h2 class="register-title">Register</h2>
      <?php if (isset($success_message)) { ?>
        <p style="color: green;"><?php echo $success_message; ?></p>
      <?php } ?>
      <?php if (!empty($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
      <?php } ?>
      <form class="register-form" method="POST" action="register.php">
        <div class="form-group">
          <label for="username">Username:</label>
          <input
            type="text"
            id="username"
            name="username"
            placeholder="Enter your username"
          />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email"
          />
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
          />
        </div>
        <div class="form-group">
          <label for="confirm-password">Confirm Password:</label>
          <input
            type="password"
            id="confirm-password"
            name="confirm-password"
            placeholder="Confirm your password"
          />
        </div>
        <button type="submit" class="register-button">Register</button>
      </form>
    </div>
  </body>
</html>
