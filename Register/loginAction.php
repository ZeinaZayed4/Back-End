<?php

session_start();
require_once 'includes/connection.php';
$errors = array();

if (isset($_POST['login'])) {
    $user = mysqli_real_escape_string($conn, $_POST['name']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(empty($user)) {
        array_push($errors, "Username is required");
    }
    if(empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $pass = md5($password);
        $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['user'] = $user;
            header('location:index.php');
        } else {
            array_push($errors, "Invalid username or password");
            header('location:login.php');
        }
    } else {
        header('location:login.php');
    }
}