<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<div class="container">
<div class="colorRed">
</div>
<div class="colorBlue"> 
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

require_once("../connect.php");
    $sql='SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org';
    echo("<h1>Ćw 1</h1>");
    echo("<h2>$sql</h2>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

    $sql='SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (dzial=1 or dzial=4)';
    echo("<h1>Ćw 2</h1>");
    echo("<h2>$sql</h2>");
    $result = $conn->query($sql); 
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

    $sql='SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) and (imie like "%a")';
    echo("<h1>Ćw 3</h1>");
    echo("<h2>$sql</h2>");
    $result = $conn->query($sql); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");

    $sql='SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (imie not like "%a")';
    echo("<h1>Ćw 4</h1>");
    echo("<h2>$sql</h2>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                
                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");

    $sql='SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) order by imie desc';
    echo("<h1>Ćw 5</h1>");
    echo("<h2>$sql</h2>"); 
    $result = $conn->query($sql); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                  echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");

    $sql='SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) AND (dzial=3) order by imie asc';
    echo("<h1>Ćw 6</h1>");
    echo("<h2>$sql</h2>");
    $result = $conn->query($sql); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                 echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");

        $sql='SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie like "%a") order by imie asc';
        echo("<h1>Ćw 7</h1>");
        echo("<h2>$sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");

        $sql='SELECT imie, zarobki, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) AND (imie like "%a") AND (dzial=1 OR dzial=3) order by zarobki asc';
        echo("<h1>Ćw 8</h1>");
        echo("<h2>$sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");

        $sql='SELECT imie, zarobki, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (imie not like "a%") order by nazwa_dzial asc, zarobki asc';
        echo("<h1>Ćw 9</h1>");
        echo("<h2>$sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");

        $sql='SELECT * FROM pracownicy, organizacja WHERE dzial=id_org AND dzial=4 order by zarobki desc limit 2';
        echo("<h1>Ćw 10</h1>");
        echo("<h2>$sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Id</th>");
            echo("<th>Imie</th>");
            echo("<th>Dział</th>");
            echo("<th>Nazwa_działu</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_urodzenia</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");

        $sql='SELECT * FROM pracownicy, organizacja WHERE dzial=id_org AND (dzial=4 or dzial=2) order by zarobki desc limit 3';
        echo("<h1>Ćw 11</h1>");
        echo("<h2>$sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Id</th>");
            echo("<th>Imie</th>");
            echo("<th>Dział</th>");
            echo("<th>Nazwa_działu</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_urodzenia</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");

        $sql='SELECT * FROM pracownicy, organizacja WHERE dzial=id_org order by data_urodzenia asc limit 1';
        echo("<h1>Ćw 12</h1>");
        echo("<h2>$sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Id</th>");
            echo("<th>Imie</th>");
            echo("<th>Dział</th>");
            echo("<th>Nazwa_działu</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_urodzenia</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");

?>
</div>    
</div>
</html>