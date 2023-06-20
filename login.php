<?php
session_start();
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = ?";
    $statement = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($statement, "s", $username);
    mysqli_stmt_execute($statement);
    $result = mysqli_stmt_get_result($statement);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];

        if (password_verify($password, $hashedPassword)) {
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid password";
        }
    } else {
        $error = "Username not found";
    }

    mysqli_stmt_close($statement);
}

mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <style>
    /* login */

    .login-container {
      background-color: #244131;
      border-radius: 20px;
      padding: 25px;
      width: 400px;
      margin: 0 auto;
    }

    .login-title {
      color: #fff;
    }

    .login-form {
      margin-top: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      color: #fff;
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"],
    button[type="submit"] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: none;
      background-color: #fff;
    }

    .login-button {
      background-color: #244131;
      color: #244131;
      cursor: pointer;
      font-weight: bold;
    }

    .back-button,
    .register-link {
      color: #fff;
      text-decoration: none;
    }

    .back-button {
      display: block;
      margin-bottom: 20px;
    }

    .register-link a {
      color: #fff;
      text-decoration: underline;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
  <body>
    <div class="login-container">
      <a href="javascript:history.back()" class="back-button">&#8592; Back</a>
      <h2 class="login-title">LOGIN</h2>
      <form class="login-form" method="POST" action="login.php">
        <div class="form-group">
          <label for="username">Username:</label>
          <input
            type="text"
            id="username"
            name="username"
            placeholder="Enter your username"
            required
          />
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
            required
          />
        </div>
        <div class="form-group">
          <label for="remember-me" style="display: flex; align-items: center">
            <input
              type="checkbox"
              id="remember-me"
              name="remember-me"
              style="float: left; margin-right: 5px"
            />
            <span style="float: right">Remember me</span>
          </label>
        </div>

        <button type="submit" class="login-button">LOGIN</button>
      </form>
      <p class="register-link">
        Don't have an account? <a href="register.php">Register here</a>
      </p>
      <?php if (isset($error)) { ?>
        <p class="error-message"><?php echo $error; ?></p>
      <?php } ?>
    </div>
  </body>
</html>
