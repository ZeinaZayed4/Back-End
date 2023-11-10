<?php
require_once 'includes/connection.php';

$id = $_GET['id'];
$deleteEmployee = "DELETE FROM employee WHERE id=$id";

if(mysqli_query($conn , $deleteEmployee)) {
    header('location:index.php');
}