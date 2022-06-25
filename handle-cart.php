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
    $i1 = $_POST["i1"];
    $i2 = $_POST["i2"];
    $i3 = $_POST["i3"];
    $i4 = $_POST["i4"];
    $i5 = $_POST["i5"];
    $i6 = $_POST["i6"];

   if($_SESSION['usercartav'] == false){
    $setUserInCart = "INSERT INTO `cart` (`username`, `i1`, `i2`, `i3`, `i4`, `i5`, `i6`) VALUES ('$username', '', '', '', '', '', '');";
    mysqli_query($conn,$setUserInCart);
    $_SESSION['usercheck'] == true;
   }
    

        if(!$i1== ''){
            $sqlI1 = "UPDATE `cart` SET `i1` = '$i1' WHERE `cart`.`username` = '$username';";
            $result = mysqli_query($conn,$sqlI1);
            if($result){
                header('Location: success.php');
                exit;
            }
          
        }
     
      

      if(!$i2==''){
                $sqlI2 = "UPDATE `cart` SET `i2` = '$i2' WHERE `cart`.`username` = '$username';";
               $result = mysqli_query($conn,$sqlI2);
                if($result){
                    header('Location: success.php');
                    exit;
                }
                
            }

            if(!$i3==''){
                $sqlI3 = "UPDATE `cart` SET `i3` = '$i3' WHERE `cart`.`username` = '$username';";
               $result = mysqli_query($conn,$sqlI3);
                if($result){
                    header('Location: success.php');
                    exit;
                }
             
            }

            if(!$i4==''){
                $sqlI4 = "UPDATE `cart` SET `i4` = '$i4' WHERE `cart`.`username` = '$username';";
               $result = mysqli_query($conn,$sqlI4);
                if($result){
                    header('Location: success.php');
                    exit;
                }
              

            }
            if(!$i5==''){
                $sqlI5 = "UPDATE `cart` SET `i5` = '$i5' WHERE `cart`.`username` = '$username';";
               $result = mysqli_query($conn,$sqlI5);
                if($result){
                    header('Location: success.php');
                    exit;
                }
              
            }

            if(!$i6==''){

                $sqlI6 = "UPDATE `cart` SET `i6` = '$i6' WHERE `cart`.`username` = '$username';";
               $result = mysqli_query($conn,$sqlI6);
                if($result){
                    header('Location: success.php');
                    exit;
                }
               
            }
 

    header('Location:menu.php');
}
  
}

?>