<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'includes/head.php' ?>
</head>
<body>
<?php include_once 'includes/navbar.php' ?>
<section class="my-5 container w-50 mx-auto py-5">
    <div class="alert alert-secondary py-3 text-center">
        <h2> Log in now </h2>
    </div>
    <form action="loginAction.php" method="post">
        <div class="form-group my-2">
            <label for="name">Username</label>
            <input type="text" class="form-control py-2" id="name"
                   name="name">
        </div>
        <div class="form-group my-2">
            <label for="password">Password</label>
            <input type="password"
                   class="form-control py-2" id="password" name="password">
        </div>
        <input type="submit" value="Log in"
               class="btn btn-secondary my-2" name="login">
    </form>
</section>
<?php include_once 'includes/footer.php' ?>
</body>
</html>