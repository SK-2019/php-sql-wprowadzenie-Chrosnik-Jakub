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

require_once("../connect.php");

$sql = ("SELECT * from biblTytul");
echo("<h2>".$sql."</h2>");

$result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Tytul</th>");

        while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["tytul"]."</td>");
                echo("</tr>");
            }
        echo("</table>");


$sql = ("SELECT * from biblAutor");
echo("<h2>".$sql."</h2>");

$result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Autor</th>");

        while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td>");
                echo("</tr>");
            }
        echo("</table>");


$sql="Select * FROM biblAutor, biblTytul, biblAutor_biblTytul where biblAutor_id=biblAutor.id AND biblTytul_id=biblTytul.id";
echo("<h2>".$sql."</h2>");
    
 $result=$conn->query($sql);
         echo("<table border=1>");
            echo("<th>ID</th>");
            echo("<th>Autor</th>");
            echo("<th>Tytul</th>");
            
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td>");
               echo("</tr>");
            }
          echo("</table>");
?>
</div>
</div>
</html>