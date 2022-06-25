<?php

$loginerror=false;
$login = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include 'components/_dbconnect.php';

  $username = $_POST["username"];
  $password = $_POST["password"];

    $sql = "SELECT * from `restaurant` where `username`= '$username' AND `password` = '$password'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);

    if($num ==1) {
      $login = true;
      session_start();
      $_SESSION['loggedin'] =  true;
      $_SESSION['username'] = $username;
      $_SESSION['usercartav'] = false;
      header('Location:index.php');
 
    }
  else{
    $loginerror = true;
  }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="css/login-style.css">
  <link rel="stylesheet" href="css/_alert.css">
  <link rel="stylesheet" href="css/row.css">
  <link href="https://fonts.googleapis.com/css2?family=Georama:wght@200;400;500&display=swap" rel="stylesheet">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <title>Login</title>
</head>

<body>

  <header class="header">

    <?php
      require 'components/_navbar.php';
    ?>

    <?php
       if($loginerror){
        echo '<div class="alert failure">
         Invalid Credentials.. Try Again
      </div>';
      }
    ?>

    <form action="login.php" method="POST" class="signup-sec">
      <div class="mb-3 ">

        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
      </div>

      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
      <br>
      <div class="buttons">
        <button type="submit" class="btn-login btn btn-success btn-lg ">Login</button>
        <a href="signup.php"> <button type="button" class="btn-signup btn btn-success btn-lg ">Register with us</button>
        </a>
      </div>

    </form>

  </header>

</body>

</html>