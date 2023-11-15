<?php

require_once 'includes/connection.php';
$errors = array();

if(isset($_POST['register'])) {
    $user = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirm']);

    if(empty($user)) {
        array_push($errors, "Username is required");
    }
    if(empty($email)) {
        array_push($errors, "Email is required");
    }
    if(empty($password)) {
        array_push($errors, "Password is required");
    }
    if($password != $confirmPassword) {
        array_push($errors, "Passwords aren't matched");
    }

    $selectedUser = "SELECT * FROM users WHERE email='$email'";
    $res = mysqli_query($conn, $selectedUser);
    $userRow = mysqli_fetch_assoc($res);

    if($userRow) {
        if ($userRow['email'] == $email) {
            array_push($errors, "Email already taken");
        }
    }

    if (count($errors) == 0) {
        $pass = md5($password);
        $insertUser = "INSERT INTO users(username, email, password) VALUES ('$user', '$email', '$pass')";
        mysqli_query($conn, $insertUser);

        $_SESSION['user'] = $user;
        header('location:index.php');
    } else {
        header('location:register.php');
    }
}