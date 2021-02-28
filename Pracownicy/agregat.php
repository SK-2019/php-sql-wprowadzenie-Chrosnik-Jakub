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
<h1 class="title">🌹 Kuba Chrośnik 🌹</h1>
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

require_once("../connect.php");
    $sql='SELECT sum(zarobki) as sz FROM pracownicy';
    echo("<h2>$sql</h2>");
    $result = $conn->query($sql); 
        echo("<table border=1>");
        echo("<th>Suma_Zarobków</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["sz"]."</td>");
                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");

        $sql='SELECT sum(zarobki) as sz FROM pracownicy WHERE imie like "%a"';
        echo("<h2>$sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Suma_Zarobków</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["sz"]."</td>");
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");

        $sql='SELECT sum(zarobki) as sz FROM pracownicy WHERE (imie not like "a%") AND (dzial=2 OR dzial=3)';
        echo("<h2>$sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Suma_zarobków</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["sz"]."</td>");
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");

        $sql='SELECT avg(zarobki) as az FROM pracownicy where imie not like "%a"';
       echo("<h2>$sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Średnia_zarobków</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["az"]."</td>");
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");

        $sql='SELECT avg(zarobki) as az FROM pracownicy WHERE dzial=4';
        echo("<h2>$sql</h2>");
        $result = $conn->query($sql); 
            echo("<table border=1>");
            echo("<th>Średnia_zarobków</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["az"]."</td>");
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");

            $sql='SELECT avg(zarobki) as az FROM pracownicy WHERE (imie not like "%a") AND (dzial=1 OR dzial=2)';
            echo("<h2>$sql</h2>");
            $result = $conn->query($sql); 
                echo("<table border=1>");
                echo("<th>Średnia_zarobków</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                            echo("<td>".$row["az"]."</td>");
                        echo("</tr>");
                    }
        
                echo("</table>");

                $sql='SELECT count(imie) as ip FROM pracownicy';
                echo("<h2>$sql</h2>");
                $result = $conn->query($sql); 
                echo("<table border=1>");
                echo("<th>Ilość_pracowników</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                            echo("<td>".$row["ip"]."</td>");
                        echo("</tr>");
                    }

                echo("</table>");

                $sql='SELECT count(imie) as ip FROM pracownicy where (imie like "%a") AND (dzial=1 OR dzial=3)';
                echo("<h2>$sql</h2>");
                $result = $conn->query($sql); 
                echo("<table border=1>");
                echo("<th>Ilość_pracowników</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                            echo("<td>".$row["ip"]."</td>");
                        echo("</tr>");
                    }

                echo("</table>");

                $sql='SELECT nazwa_dzial, sum(zarobki) as sz FROM pracownicy, organizacja WHERE dzial=id_org group by dzial';
                echo("<h2>$sql</h2>");
                $result = $conn->query($sql); 
                echo("<table border=1>");
                echo("<th>Nazwa_działu</th>");
                echo("<th>Suma_zarobków</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["sz"]."</td>"); 
                        echo("</tr>");
                    }

                echo("</table>");    

                $sql='SELECT count(imie) as ip, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial';
                echo("<h2>$sql</h2>");
                $result = $conn->query($sql); 
                echo("<table border=1>");
                echo("<th>Nazwa_działu</th>");
                echo("<th>Ilość_pracowników</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["ip"]."</td>"); 
                        echo("</tr>");
                    }

                echo("</table>");    

                $sql='SELECT avg(zarobki) as az, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial';
                echo("<h2>$sql</h2>");
                $result = $conn->query($sql); 
                echo("<table border=1>");
                echo("<th>Nazwa_działu</th>");
                echo("<th>Średnia_zarobków</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["az"]."</td>"); 
                        echo("</tr>");
                    }

                echo("</table>");    

                $sql='SELECT sum(zarobki) as sum, if(imie like "%a", "Kobiety", "Mężczyźni") as plec FROM pracownicy group by plec';
                echo("<h2>$sql</h2>");
                $result = $conn->query($sql); 
                echo("<table border=1>");
                echo("<th>Suma_zarobków</th>");
                echo("<th>Płeć</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["sum"]."</td><td>".$row["plec"]."</td>"); 
                        echo("</tr>");
                    }

                echo("</table>");   

                $sql='SELECT avg(zarobki) as az, if(imie like "%a", "Kobiety", "Mężczyźni") as plec FROM pracownicy group by plec';
                echo("<h2>$sql</h2>");
                $result = $conn->query($sql); 
                echo("<table border=1>");
                echo("<th>Średnia_zarobków</th>");
                echo("<th>Płeć</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["az"]."</td><td>".$row["plec"]."</td>"); 
                        echo("</tr>");
                    }

                echo("</table>");   

                $sql='SELECT sum(zarobki) as sum, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial HAVING sum(zarobki)<28';
                echo("<h2>$sql</h2>");
                $result = $conn->query($sql);
                echo("<table border=1>");
                echo("<th>Nazwa_działu</th>");
                echo("<th>Suma_zarobków</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["sum"]."</td>");
                    }

                echo("</table>");

                $sql='SELECT avg(zarobki) as az, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie not like "%a") group by dzial having avg(zarobki)>30';
                echo("<h2>$sql</h2>");
                $result = $conn->query($sql);
                echo("<table border=1>");
                echo("<th>Nazwa_działu</th>");
                echo("<th>Średnia_zarobków</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["az"]."</td>");
                    }

                echo("</table>");

                $sql='SELECT count(imie) as i, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) group by dzial having count(imie)>2';
                echo("<h2>$sql</h2>");
                $result = $conn->query($sql);
                echo("<table border=1>");
                echo("<th>Ilość</th>");
                echo("<th>Nazwa_działu</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row["i"]."</td><td>".$row["nazwa_dzial"]."</td>");
                    }

                echo("</table>");

                
?>
</div>
</div>
</html>