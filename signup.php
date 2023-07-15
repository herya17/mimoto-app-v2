<?php
  require 'config.php';

  if (!empty($_SESSION["id"])) {
    header("Location: index.php");
  }

  if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
      echo
        "<script> alert('Email has already taken'); </script>";
    } else {
      if ($password == $confirmpassword) {
        $query = "INSERT INTO tb_user VALUES('', '$name', '$email', '$password')";
        mysqli_query($conn, $query);
        echo
          "<script> alert('Sign up successfully'); </script>";
        header("Location: login.php");
      } else {
        echo
          "<script> alert('Password does not match'); </script>";
      }
    }
  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="./public/favicon/icon.png" />
  <!-- apple touch icon -->
  <link rel="apple-touch-icon" href="./public/favicon/icon.png" />
  <!-- styles -->
  <link rel="stylesheet" type="text/css" href="styles/style.css" />
  <title>Mimoto</title>
</head>
<body>
  <div class="input">
    <h1>Sign up</h1>
    <form action="" method="post">
      <input id="name" type="text" name="name" placeholder="name" required />
      <input id="email" type="email" name="email" placeholder="Email" required />
      <input id="password" type="password" name="password" placeholder="Password" required />
      <input id="confirmpassword" type="password" name="confirmpassword" placeholder="Confirm Password" required />
      <input class="btn-submit" type="submit" name="submit" />
    </form>
    <a href="./login.php">Login</a>
  </div>
</body>
</html>
