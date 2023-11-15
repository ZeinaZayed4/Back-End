<?php
require_once 'includes/connection.php';
session_start();

if(!isset($_SESSION['user'])) {
    header('location:login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'includes/head.php' ?>
</head>
    <body>
        <?php include_once 'includes/navbar.php' ?>
        <section class="my-5 container text-center">
            <?php if (isset($_SESSION['user'])) :  ?>
                <div class="alert alert-success py-4 w-50 mx-auto">
                    <h2>Welcome <?php echo $_SESSION['user']?></h2>
                    <a href="index.php?logout='1'" class="text-danger">
                        <strong>Log out</strong>
                    </a>
                </div>
            <?php endif; ?>
        </section>
    <?php include_once 'includes/footer.php' ?>
    </body>
</html>