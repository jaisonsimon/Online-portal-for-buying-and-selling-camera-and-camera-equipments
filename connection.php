<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "lensman";
$con = mysqli_connect($server, $user, $pass, $db) or die("Connection Error" . mysqli_connect_error());
?>