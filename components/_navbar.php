<?php
session_start();

  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    $userin =  false;
  }
  else{
    $userin =  true;
  }
echo '<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ccb688;">
<div class="container-fluid">
  <a class="navbar-brand" href="index.php">Tasty Dots</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link " aria-current="page" href="index.php"><span class ="nav-item">Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="menu.php"><span class ="nav-item">Menu</span></a>
      </li>';

        if(!$userin){
          echo '<li class="nav-item">
          <a class="nav-link" href="login.php"><span class ="nav-item">Login</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="signup.php"><span class ="nav-item">Signup</span></a>
        </li>';
        }
      
  
      if($userin){
        echo'<li class="nav-item">
        <a class="nav-link" href="logout.php"><span class ="nav-item">Logout</span></a>
      </li>';
      }
     
      
    echo '</ul>
   
  </div>
</div>
</nav>';
?>