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
    <a href="pracownicy.php">Pracownicy</a>
     | 
    <a href="organizacja_pracownicy.php">Organizacja i Pracownicy</a>
     | 
    <a href="agregat.php">Funkcje agregujące</a>
     | 
    <a href="data i czas.php">Data i Czas</a>
     | 
    <a href="formularz.html">Formularz</a>
     | 
    <a href="daneDoBazy.php">Dane do bazy</a>
</div> 
</body>
<body>
<h2>Dodawanie Pracownika</h2>
<form action="insert.php" method="POST">
	<input type="text" name="name" placeholder="Imie"></br>
	<input type="number" name="dzial" placeholder="Dział"></br>
	<input type="number" name="zarobki" placeholder="Zarobki"></br>
	<input type="date" name="data_urodzenia" placeholder="Data urodzenia"></br>
	<input type="submit" value="wyślij do insert.php">
</form>

<h2>Usuwanie pracownika</h2>
<form action="delete.php" method="POST">
   <input type="number" name="id"></br>
   <input type="submit" value="Usuń pracownika">
</form>
</body>
<?php

require_once("connect.php");

$sql = ("SELECT id_pracownicy, imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org");
$result=$conn->query($sql);
    echo("<table border=1>");
    echo("<th>id_pracownicy</th>");
    echo("<th>imie</th>");
    echo("<th>zarobki</th>");
    echo("<th>data_urodzenia</th>");
    echo("<th>nazwa_dzial</th>");
    echo("<th>usuwanie</th>");

    while($row=$result->fetch_assoc()) {
            echo("<tr>");
                echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>
		
		<td>
		
		<form action='delete.php' method='POST'>
   			<input type='number' name='id' value='".$row['id_pracownicy']."' hidden></br>
   			<input type='submit' value='Usuń'>
		</form>
		
		</td>
		
		");
            echo("</tr>");
        }
    echo("</table>");

?>
</html>
