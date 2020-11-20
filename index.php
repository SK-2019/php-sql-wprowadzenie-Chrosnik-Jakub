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
</div> 

<br>

<form action="strona.php" method="POST">
	<input type="text" name="firstname" placeholder="Imie"></br>
	<input type="text" name="lastname" placeholder="Dzial"></br>
	<input type="text" name="city" placeholder="Zarobki"></br>
	<input type="text" name="phone" placeholder="Data urodzenia"></br>
	<input type="submit" value="wyślij do strona.php">
</form>

</body>
</html>
