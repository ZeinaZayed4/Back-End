<?php
$host = 'localhost';
$username = "root";
$password = "";
$dbName = "Employees";

$conn = mysqli_connect($host , $username , $password , $dbName);
if(!$conn) {
    die('Connection Failed!');
}