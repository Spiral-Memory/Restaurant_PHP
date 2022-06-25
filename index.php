<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main-style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Georama:wght@200;400;500&display=swap" rel="stylesheet">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <title>Tasty Dots</title>
</head>

<body>

  <header class="header">

      <?php
      require 'components/_navbar.php';
    ?>


    
   
    

     <div class="logo">
       <img src="images/main/logo.png" alt="Logo" class="logo-img">
     </div>


    <div class="text-box">
      <h1> <span class="welcome">Welcome to</span> <br> <span class="comp-name">Tasty Dots</span> </h1>
      <a class="btn btn-full" href="menu.php">I’m hungry </a>
      <a class="btn btn-ghost" href="menu.php">Show me more </a>
    
    
  </header>

</body>

</html>