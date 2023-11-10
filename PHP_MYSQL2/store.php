<?php

require_once "includes/connection.php";

if(isset($_POST['add_employee'])) {
    $name = mysqli_real_escape_string($conn , $_POST['name']);
    $address  = mysqli_real_escape_string($conn , $_POST['address']);
    $salary = mysqli_real_escape_string($conn, $_POST['salary']);
    $salaryAfterBonus = mysqli_real_escape_string($conn, $_POST['salaryAfterBonus']);
    $gender = mysqli_real_escape_string($conn , $_POST['gender']);
    $annualSalary = (float)$salary * 12;

    $insertEmployee = "INSERT INTO employee(name, address, salary, salaryAfterBonus, gender, annualSalary) 
    VALUES ('$name', '$address', '$salary','$salaryAfterBonus', '$gender', '$annualSalary')";

    if(mysqli_query($conn , $insertEmployee)) {
        header('location:index.php');
    }else{
        header('location:create.php');
    }
}