<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "car_rental";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn){
 // echo "Connection Successful";
}else{
 // echo("no Connection");
  die("Connection failed: " . $conn->connect_error);
}
?>