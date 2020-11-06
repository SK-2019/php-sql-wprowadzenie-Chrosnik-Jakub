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
    <a href="pracownicy.php">Pracownicy</a>
     | 
    <a href="orgPracownicy.php">Organizacja i Pracownicy</a>
     | 
    <a href="agregat.php">Funkcje agregujące</a>
</div>    
<?php

require_once("connect.php");

//tabelka 1

echo("<h2>Tabelka - SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org and dzial = 2</h2>");
    
    $result = $conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org and dzial = 2');
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
?>
</body>
</html>
