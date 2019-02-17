<?php 

    include_once('../includes/database.php');
    include_once('../includes/user.php');

    if(!empty($_POST)) {
        login([
            'username' => $_POST['username'],
            'password' => $_POST['password']
        ]);
    }
?>

<!DOCTYPE html>
<html lang="en">

<?php require_once('../includes/head.php') ?>

<body>
    <!-- Header -->
    <?php include_once('../includes/header.php') ?>

    <!-- Main content -->
    <div class="container main">

        <!-- Login form -->
        <h3>Login</h3>
        <form action="login.php" method="post">
            <label>Username :</label><br>
            <input type="text" class="form-control" name="username" id="username" placeholder="JohnDoe"><br>
            <label>Password :</label><br>
            <input type="password" class="form-control" name="password" id="password" placeholder="sudorm-rf"><br>
            <input type="submit" class="btn btn-primary register-btn" value="Submit">
        </form>
        or <a href="register.php">register</a>

    </div>

    <!-- Script -->
    <script src="./js/index.js"></script>
</body>
</html>