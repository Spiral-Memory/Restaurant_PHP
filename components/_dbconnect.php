<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(!$conn){
    die("Error".mysqli_connect_error);
}
