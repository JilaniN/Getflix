<?php
session_start();

// servername => localhost
$conn = mysqli_connect("localhost", "root", "root", "register");

// // Check connection
if($conn === false){
  die("ERROR: Could not connect. "
      . mysqli_connect_error());
}
?>