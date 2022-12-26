<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "carrental_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE TABLE LOGINDETAILS(
name VARCHAR(30) NOT NULL, 
email VARCHAR(50),
password VARCHAR(80)
)";

if ($conn->query($sql) === TRUE) 
{
  
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
