<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Pracownik (null, imie, dzial, zarobki) 
       VALUES (null,'Ksawery', 3, 36,'1995-10-21')";

//zapisanie do bazy danych
$conn->query($sql);

$conn->close();
?>
