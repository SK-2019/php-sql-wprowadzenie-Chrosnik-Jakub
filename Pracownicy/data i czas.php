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
       $sql='SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy, organizacja WHERE dzial=id_org';
       echo("<h2>$sql</h2>");
       $result = $conn->query($sql);
           echo("<table border=1>");
           echo("<th>Id</th>");
           echo("<th>Imie</th>");
           echo("<th>Dział</th>");
           echo("<th>Nazwa_Działu</th>");
           echo("<th>Zarobki</th>");
           echo("<th>Data_urodzenia</th>");
           echo("<th>Wiek</th>");
               while($row=$result->fetch_assoc()){ 
                   echo("<tr>");
                   echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["wiek"]."</td>");                    echo("</tr>");
               }
   
           echo("</table>");

           $sql='SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy, organizacja WHERE dzial=id_org AND nazwa_dzial="serwis"';
           echo("<h2>$sql</h2>");
           $result = $conn->query($sql);
               echo("<table border=1>");
               echo("<th>Id</th>");
               echo("<th>Imie</th>");
               echo("<th>Dział</th>");
               echo("<th>Nazwa_Działu</th>");
               echo("<th>Zarobki</th>");
               echo("<th>Data_urodzenia</th>");
               echo("<th>Wiek</th>");
                   while($row=$result->fetch_assoc()){ 
                       echo("<tr>");
                       echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["wiek"]."</td>"); 
                       echo("</tr>");
                   }
       
            echo("</table>");

            $sql='SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org';
            echo("<h2>$sql</h2>");
            $result = $conn->query($sql);
                echo("<table border>");
                echo("<th>Wiek_wszystkich_pracowników</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["wiek"]."</td>");                    
                        echo("</tr>");
                   }
           echo("</table>");

           $sql='SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org AND nazwa_dzial="handel"';
           echo("<h2>$sql</h2>");
           $result = $conn->query($sql);
               echo("<table border>");
               echo("<th>Wiek_pracowników_handel</th>");
                   while($row=$result->fetch_assoc()){ 
                       echo("<tr>");
                       echo("<td>".$row["wiek"]."</td>");                    
                       echo("</tr>");
                  }
          echo("</table>");

          $sql='SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy WHERE imie like "%a"';
          echo("<h2>$sql</h2>");
          $result = $conn->query($sql);
              echo("<table border>");
              echo("<th>Wiek_kobiet</th>");
                  while($row=$result->fetch_assoc()){ 
                      echo("<tr>");
                      echo("<td>".$row["wiek"]."</td>");                    
                      echo("</tr>");
                 }
         echo("</table>");


          $sql='SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy WHERE imie not like "%a"';
          echo("<h2>$sql</h2>");
          $result = $conn->query($sql);
              echo("<table border>");
              echo("<th>Wiek_mężczyzn</th>");
                  while($row=$result->fetch_assoc()){ 
                      echo("<tr>");
                      echo("<td>".$row["wiek"]."</td>");                    
                      echo("</tr>");
                 }
         echo("</table>");


        $sql='SELECT dzial, avg(YEAR(CURDATE()) - YEAR(data_urodzenia)) as a, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial';
        echo("<h2>$sql</h2>");
          $result = $conn->query($sql);
              echo("<table border>");
              echo("<th>Wiek_mężczyzn</th>");
              echo("<th>Średnia_wiek</th>");
              echo("<th>Nazwa_działu</th>");
                  while($row=$result->fetch_assoc()){ 
                      echo("<tr>");
                      echo("<td>".$row["dzial"]."</td><td>".$row["a"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                      echo("</tr>");
                 }
         echo("</table>");


         $sql='SELECT dzial, sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial';
         echo("<h2>$sql</h2>");
           $result = $conn->query($sql);
               echo("<table border>");
               echo("<th>Dział</th>");
               echo("<th>Suma_wiek</th>");
               echo("<th>Nazwa_działu</th>");
                   while($row=$result->fetch_assoc()){ 
                       echo("<tr>");
                       echo("<td>".$row["dzial"]."</td><td>".$row["suma"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                       echo("</tr>");
                  }
          echo("</table>");


         $sql='SELECT dzial, max(YEAR(CURDATE()) - YEAR(data_urodzenia)) as max, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial';
         echo("<h2>$sql</h2>");
           $result = $conn->query($sql);
               echo("<table border>");
               echo("<th>Dział</th>");
               echo("<th>Wiek_najstarsi</th>");
               echo("<th>Nazwa_działu</th>");
                   while($row=$result->fetch_assoc()){ 
                       echo("<tr>");
                       echo("<td>".$row["dzial"]."</td><td>".$row["max"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                       echo("</tr>");
                  }
          echo("</table>");

?>
    </div>
</div>

</html>