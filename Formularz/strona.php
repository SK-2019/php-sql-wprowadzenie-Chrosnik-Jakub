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
<div class="colorGreen"> 
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
</div>
</div>
</html>