<?php
echo("jestes w insert.php");
echo $_POST['name'];

$conn = new mysqli('mysql-kuba.alwaysdata.net','kuba_ch','moj@b@z@','kuba_ch');
if ($conn->connect_error) {
    die("connection failed: ".mysqli_connect_error());
}

$sql = "INSERT INTO Pracownik (null,imie, dzial, zarobki) 
       VALUES (null,".$_POST['name'].", 1, 76,'1991-11-21')";

echo "<li>".$sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>