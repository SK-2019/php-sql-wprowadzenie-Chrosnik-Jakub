<?php
<h2>Select *, year(curdate())-year(data_urodzenia) as wiek from pracownicy, organizacja</h2>

                require_once("connect.php");
                $result=$conn->query("Select *, year(curdate())-year(data_urodzenia) as wiek from pracownicy, organizacja where dzial=id_org");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Nazwa_dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                    echo("<th>Wiek</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["wiek"]."</td>");
                            echo("</tr>");}
                echo("</table>");

<h2>Select *, year(curdate())-year(data_urodzenia) as wiek from pracownicy, organizacja</h2>

                require_once("connect.php");
                $result=$conn->query("Select *, year(curdate())-year(data_urodzenia) as wiek from pracownicy, organizacja where dzial=id_org and nazwa_dzial='serwis'");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Nazwa_dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                    echo("<th>Wiek</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["wiek"]."</td>");
                            echo("</tr>");}
                echo("</table>");

?>
