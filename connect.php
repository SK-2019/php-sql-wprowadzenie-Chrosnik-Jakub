<?php

$servername = "mysql-kuba.alwaysdata.net";
$username = "kuba_ch";
$password = "moj@b@z@";
$dbanme = "kuba_ch";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>