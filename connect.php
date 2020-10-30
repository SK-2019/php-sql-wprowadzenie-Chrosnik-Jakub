<?php

$conn = new mysqli('mysql-kuba.alwaysdata.net','kuba_ch','moj@b@z@','kuba_ch');
if ($conn->connect_error) {
    die("connection failed: ".mysqli_connect_error());

}
?>
