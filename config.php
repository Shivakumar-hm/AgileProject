<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "sevicerequest";

$conn = mysqli_connect($hostname, $username, $password, $database) or die("Database connection failed");

// $base_url = "https://code.akhfasoft.net/login-register-youtube/";
// $my_email = "code@akhfasoft.net";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>