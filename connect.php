<?php

$servername = "mysql-kuba.alwaysdata.net";
$username = "kuba_ch";
$password = "moj@b@z@";
$dbanme = "kuba_ch";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: ".mysqli_connect_error());
}

?>
