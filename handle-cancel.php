<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'components/_dbconnect.php';
  
    session_start();
  
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
      header("location: login.php");
      exit;
  }

  else{
    $username = $_SESSION['username'];
    $sqlDelete = "DELETE FROM `cart` WHERE `cart`.`username` = '$username';";
    mysqli_query($conn,$sqlDelete);
    $_SESSION['usercartav'] == false;
    header('Location:cancel.php');
  }
}

?>

