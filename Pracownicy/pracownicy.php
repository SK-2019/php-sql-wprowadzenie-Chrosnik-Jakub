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
    <a href="index.php">Index</a>
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

    require("connect.php");
    $sql='SELECT * FROM pracownicy, organizacja WHERE dzial=2 AND dzial=id_org';
    echo("<h1>Ćw 1</h1>");
    echo("<h2>$sql</h2>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                echo("</tr>");
            }

        echo("</table>");
    require("connect.php");
    $sql='SELECT * FROM pracownicy, organizacja where dzial=id_org AND (dzial=1 or dzial=2)';
    echo("<h1>Ćw 2</h1>");
    echo("<h2>$sql</h2>"); 
    $result = $conn->query($sql); 
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                echo("</tr>");
            }
    

        echo("</table>");
    require("connect.php");
    $sql='SELECT * FROM pracownicy, organizacja WHERE zarobki<30 AND dzial=id_org';
    echo("<h1>Ćw 3</h1>");
    echo("<h2>$sql</h2>");
    $result = $conn->query($sql); 
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                echo("</tr>");
            }

            echo("</table>")

?>
    
</body>
</html>
