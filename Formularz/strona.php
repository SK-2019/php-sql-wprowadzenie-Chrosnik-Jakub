<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="nav"> 
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Chrosnik-Jakub">GITHUB</a>
     | 
    <a href="/index.php">Index</a>
     | 
    <a href="/Pracownicy/pracownicy.php">Pracownicy</a>
     | 
    <a href="/Pracownicy/organizacja_pracownicy.php">Organizacja i Pracownicy</a>
     | 
    <a href="/Pracownicy/agregat.php">Funkcje agregujące</a>
     | 
    <a href="/Pracownicy/data i czas.php">Data i Czas</a>
     | 
    <a href="/Formularz/formularz.html">Formularz</a>
     | 
    <a href="/Formularz/daneDoBazy.php">Dane do bazy</a>
     |
    <a href="/Biblioteka/ksiazki.php">Ksiazki</a>
</div> 

<?php
    
  echo ("</br>");

echo("<li> Imie: ".$_POST['imie']);
  echo ("</br>");
    
echo("<li> Nazwisko: ".$_POST['nazwisko']);
  echo ("</br>");

echo("<li> Dzial: ".$_POST['dzial']);
  echo ("</br>");

echo("<li> Zarobki: ".$_POST['zarobki']);
  echo ("</br>");

echo("<li> Data urodzenia: ".$_POST['dataur']);
  echo ("</br>");

?>
</body>
</html>
