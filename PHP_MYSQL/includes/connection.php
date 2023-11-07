<?php

$host = "localhost";
$username = "root";
$password = "";
$dbName = "training";

$conn = mysqli_connect($host, $username, $password, $dbName);

if (!$conn) {
    echo "<h2>Connection Failed</h2>" . "<br>";
}
