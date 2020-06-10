<?php
require_once("config.php");
    $adress="localhost";
    $login="root";
    $password="";
    $bd="adq";

$connection = mysqli_connect($adress,$login,$password,$bd);
if (!$connection) {
    die("Database connection failed");
}

$db_select = mysqli_select_db($connection, $bd);
if (!$db_select) {
    die("Database selection failed: " . mysqli_error($connection));
}
?>