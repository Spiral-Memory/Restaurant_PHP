<?php
$errorAlert = false;
$successAlert = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include 'components/_dbconnect.php';
 
  $name = $_POST["name"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $address = $_POST["address"];
  $existsSql = "SELECT * FROM `restaurant` WHERE `username` = '$username'";
  $result = mysqli_query($conn,$existsSql);
  $numExistsRows = mysqli_num_rows($result);
  if($numExistsRows>0){
    $errorAlert = true;
  }

  if($errorAlert == false){
    $sql = "INSERT INTO `restaurant`(`name`, `username`, `password`, `email`, `address`, `dt`) VALUES ('$name', '$username', '$password', '$email', '$address', current_timestamp())";
    $result = mysqli_query($conn,$sql);
    if($result) {
      $successAlert = true;
      header( "refresh:3;url=login.php" );
    }
  
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
  <link rel="stylesheet" href="css/signup-style.css">
  <link rel="stylesheet" href="css/row.css">
  <link rel="stylesheet" href="css/_alert.css">
  <link href="https://fonts.googleapis.com/css2?family=Georama:wght@200;400;500&display=swap" rel="stylesheet">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous">


  </script>
  <title>Signup</title>
</head>

<body>

  <header class="header">

      <?php
      require 'components/_navbar.php';
    ?>

    <?php
    if($successAlert){
      echo '<div class="alert success">
      <strong>Success, </strong> Your Account has been Created!, You will redirected to login page..
    </div>';
    }

    if($errorAlert){
      echo '<div class="alert failure">
       Username Already Exists.. Try different username.
    </div>';
    }
    ?>


    <form action="signup.php" method="POST" class = "signup-sec">
    <div class="mb-3 ">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name = "name" placeholder="Your Name">
  
<br>
<label for="email" class="form-label">Email address</label>
  <input type="email" class="form-control" id="email" name="email" placeholder="name@domain.com">
  <br>
  <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
</div>

  <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name ="password" placeholder="Password">
</div>
<br>
<div class="mb-3">
  <label for="address" class="form-label">Address</label>
  <textarea class="form-control" id="address" rows="3" name = "address"></textarea>
</div>
<br>
<button type="submit" class="btn-signup btn btn-success btn-lg ">Sign Up</button>
    </form>
    
  </header>

</body>

</html>
