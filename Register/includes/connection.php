<?php

$host = 'localhost';
$username = "root";
$password = "";
$dbName = "Training";

$conn = mysqli_connect($host, $username, $password, $dbName);

if (!$conn) {
    die('Connection Failed!');
}