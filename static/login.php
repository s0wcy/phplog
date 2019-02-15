<?php 

    include_once('./includes/database.php');
    include_once('./includes/user.php');

?>

<!DOCTYPE html>
<html lang="en">

<?php require_once('../includes/head.php') ?>

<body>
    <!-- Header -->
    <?php require_once('../includes/header.php') ?>

    <!-- Main content -->
    <div class="container main">

        <!-- Login form -->
        <h3>Login</h3>
        <form action="#" method="post">
            <label>Username :</label><br>
            <input type="text" class="form-control" name="username" id="username" value="JohnDoe"><br>
            <label>Password :</label><br>
            <input type="text" class="form-control" name="password" id="password" value="sudorm-rf"><br>
            <input type="submit" class="btn btn-primary register-btn" value="Submit">
        </form>
        or <a href="register.php?">register</a>

    </div>

    <!-- Script -->
    <script src="./js/index.js"></script>
</body>
</html>