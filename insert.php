<?php

$servername = "mysql-kuba.alwaysdata.net";
$username = "kuba_ch";
$password = "moj@b@z@";
$dbname = "kuba_ch";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo("jestes w insert.php");
echo $_POST['name'];

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki) 
       VALUES (null,'Ksawery', 3, 36,'1995-10-21')";

//zapisanie do bazy danych
$conn->query($sql);

$conn->close();
?>
