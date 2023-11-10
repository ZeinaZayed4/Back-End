<?php require_once 'includes/connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'includes/head.php' ?>
</head>
<body>
    <?php include_once 'includes/navbar.php' ?>
    <section class="my-5 container text-center">
        <table class="table table-bordered">
            <thead>
               <tr class="table-dark">
               <th>Id</th>
                <th>Employee Name</th>
                <th>Employee Address</th>
                <th>Employee Gender</th>
                <th>Employee Salary</th>
                <th>Salary After Bonus</th>
                <th>Actions</th>
               </tr>
            </thead>
            <tbody>
            <?php 
                $sql = "SELECT * FROM employee";
                $res = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($res)) {
            ?>
            <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['gender']?></td>
                    <td><?php echo $row['salary']?></td>
                    <td><?php echo $row['salaryAfterBonus']?></td>
                    <td>
                        <a href="show.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-primary mx-1">Show</a>
                        <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-success mx-1">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-danger mx-1">Delete</a>
                    </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </section>
    <?php include_once 'includes/footer.php' ?>
</body>
</html>