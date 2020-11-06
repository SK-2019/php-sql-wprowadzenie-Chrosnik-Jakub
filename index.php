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

echo('<h1>Tabelka - wszystkie dane</h1>');

        $result = $conn->query('SELECT imie, zarobki, data_urodzenia,nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org');
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>nazwa_dzial</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }
    echo("</table>");


//tabelka 2

echo('<h1>Tabelka - wszystkie kobiety</h1>');

    $result=$conn->query('SELECT * FROM pracownicy where imie like "%a"');

        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");

    while($row=$result->fetch_assoc()){

    echo("<tr>");
    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
    echo("</tr>");
}
    echo("</table>");


//tabelka 3

echo('<h1>Tabelka - wszyscy mężczyźni</h1>');

    $result=$conn->query('SELECT * FROM pracownicy where imie not like "%a"');

        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");

    while($row=$result->fetch_assoc()){

    echo("<tr>");
    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
    echo("</tr>");
}
    echo("</table>");


//tabelka 4

echo('<h1>Tabelka - tylk dział 2</h1>');

    $result=$conn->query('SELECT * FROM pracownicy where dzial = 2');

        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");

    while($row=$result->fetch_assoc()){

    echo("<tr>");
    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
    echo("</tr>");
}
    echo("</table>");


//tabelka 5

echo('<h1>Tabelka - tylko dział 4</h1>');

    $result=$conn->query('SELECT * FROM pracownicy where dzial = 4');

        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");

    while($row=$result->fetch_assoc()){

    echo("<tr>");
    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
    echo("</tr>");
}
    echo("</table>");
    
//tabelka 6
    
echo('<h1>Tabelka - count</h1>');
    
$result=$conn->query("Select count(imie) as ci, dzial, nazwa_dzial  From pracownicy, organizacja where dzial=id_org group by dzial");
                echo("<table border=1>");
                    echo("<th>Count(Imie)</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Nazwa_Dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["ci"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                            echo("</tr>");}
                echo("</table>");
?>
</body>
</html>
