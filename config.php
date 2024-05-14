<?php
$servername = "localhost";
$username = "root"; //root is the username, and empty the password is the key to access the database in phpMyAdmin
$password = "";
$dbname = "assessment3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
