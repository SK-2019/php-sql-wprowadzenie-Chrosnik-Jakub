<?php

$conn= new mysqli("mysql-kuba.alwaysdata.net","kuba_ch","moj@b@z@","kuba_ch");


//tabelka 1

    $result=$conn->query('SELECT * FROM pracownicy');

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


//tabelka 2

echo('<h1> Tabelka Kobiet </h1>')

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
?>
