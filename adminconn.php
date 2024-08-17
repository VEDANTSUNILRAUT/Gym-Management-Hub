<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "admindb";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    echo("Something went wrong;");
}
?>  