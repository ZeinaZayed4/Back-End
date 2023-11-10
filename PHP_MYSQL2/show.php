<?php 
    require_once 'includes/connection.php';

    $id = $_GET['id'];

    $selctedStudent = "SELECT * FROM employee WHERE id=$id";
    $result = mysqli_query($conn , $selctedStudent);
    $std = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once 'includes/head.php' ?>
</head>
<body>
<?php include_once 'includes/navbar.php' ?>

    <section class="my-5 container w-50 mx-auto text-center py-5 rounded shadow text-dark bg-light border">
        <h2>Employee Name: <?php echo $std['name']?></h2>
        <h3>Annual Salary: <?php echo $std['annualSalary']?></h3>
        <h3>Address: <?php echo $std['address']?></h3>
        <a href="index.php" class="mt-2">Home</a>
    </section>

<?php include_once 'includes/footer.php' ?>

</body>
</html>