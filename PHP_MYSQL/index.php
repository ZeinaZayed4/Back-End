<?php include_once "includes/connection.php"?>
<!doctype html>
<html lang="en">
<head>
    <?php include_once 'includes/head.php' ?>
</head>
<body>
    <?php include_once 'includes/navbar.php'; ?>
    <section class="my-5 container text-center">
        <table class="table table-bordered">
            <thead>
                <tr class="table-light">
                    <th>Id</th>
                    <th>Student Name</th>
                    <th>Student Address</th>
                    <th>Student Grade</th>
                    <th>Student Gender</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM students";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['address']?></td>
                    <td><?php echo $row['grade']?></td>
                    <td><?php echo $row['gender']?></td>
                    <td>
                        <a href="" class="btn btn-sm btn-primary mx-1 ">Show</a>
                        <a href="" class="btn btn-sm btn-success mx-1 ">Edit</a>
                        <a href="" class="btn btn-sm btn-danger mx-1 ">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
    <?php include_once 'includes/footer.php' ?>
</body>
</html>