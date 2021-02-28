<?php
//require_once("config.php");
$conn = new mysqli($_SERVER['SERV'],$_SERVER['USER'], $_SERVER['PASS'], $_SERVER['DB']);
if ($conn->connect_error) {
    die("connection failed: ".mysqli_connect_error());

}
?>
