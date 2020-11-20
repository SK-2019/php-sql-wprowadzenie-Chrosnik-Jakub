<?php
echo("jestes w insert.php");
echo $_POST['name'];

require("connect.php");

$sql = "INSERT INTO pracownicy (id_pracownicy,imie, dzial, zarobki, data_urodzenia) 
       VALUES (NULL,".$_POST['imie'].", ".$_POST['dzial'], ".$_POST['zarobki'], ".$_POST['data_urodzenia'])";

echo "<li>".$sql;

$conn->close();
?>
