<?php
$servername = "localhost";
$username = "root";
$password = "";
$DbName = "loginsystem";

// Create connection
$conn = new mysqli($servername, $username, $password,$DbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>