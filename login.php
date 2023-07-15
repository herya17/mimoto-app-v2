<?php
  require 'config.php';

  if (!empty($_SESSION["id"])) {
    header("Location: index.php");
  }

  if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
      if ($password == $row["password"]) {
        $_SESSION["login"] = true;
        $_SESSION["id"] = $row["id"];
        header("Location: index.php");
      } else {
        echo
          "<script> alert('Wrong password'); </script>";
      }
    } else {
      echo
        "<script> alert('User not registered'); </script>";
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
    <h1>Log in</h1>
    <form action="" method="post">
      <input id="email" type="email" name="email" placeholder="Email" required />
      <input id="password" type="password" name="password" placeholder="Password" required />
      <input class="btn-submit" type="submit" name="submit" />
    </form>
    <a href="./signup.php">Sign Up</a>
  </div>
</body>
</html>
