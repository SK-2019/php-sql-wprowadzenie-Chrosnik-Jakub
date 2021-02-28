<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuba Chrosnik</title>
    <link rel="stylesheet" href="../style.css">
</head>
<div class="container">
<div class="colorRed">
</div>
<div class="colorBlue"> 
<a class="link" href="https://github.com/SK-2019/php-sql-wprowadzenie-Chrosnik-Jakub">GITHUB</a>

<a class="link" href="/index.php">Index</a>

<a class="link" href="/Pracownicy/pracownicy.php">Pracownicy</a>

<a class="link" href="/Pracownicy/organizacja_pracownicy.php">Organizacja i Pracownicy</a>

<a class="link" href="/Pracownicy/agregat.php">Funkcje agregujące</a>

<a class="link" href="/Pracownicy/data i czas.php">Data i Czas</a>

<a class="link" href="/Formularz/formularz.html">Formularz</a>

<a class="link" href="/Formularz/daneDoBazy.php">Dane do bazy</a>

<a class="link" href="/Biblioteka/ksiazki.php">Ksiazki</a>
</div> 
</body>
<div class="colorGreen"> 
<?php

echo("jestes w insert.php");
echo "<li>". $_POST['name'];
echo "<li>". $_POST['dzial'];
echo "<li>". $_POST['zarobki'];
echo "<li>". $_POST['data_urodzenia'];

require_once("../connect.php");

$sql = "INSERT INTO pracownicy (id_pracownicy,imie, dzial, zarobki, data_urodzenia) 
       VALUES (null,'".$_POST['name']."', ".$_POST['dzial'].", ".$_POST['zarobki'].",'".$_POST['data_urodzenia']."')";


echo "<li>". $sql;

if ($conn->query($sql) === TRUE) {
  echo ("New record created successfully");
  header('Location: daneDoBazy.php');
} else {
//informacja o ewentualnych błędach
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</div>
</div>
</html>