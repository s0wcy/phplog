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

        <!-- Register form -->
        <h3>Register</h3>
        <form action="#" method="post">
            <label>Username</label><br>
            <input type="text" class="form-control" name="username" placeholder="JohnDoe"><br>
            <label>Password</label><br>
            <input type="password" class="form-control" name="password_3" placeholder="Password"><br>
            <label>Password</label><br>
            <input type="password" class="form-control" name="password_2" placeholder="Password"><br>
            <label>Email</label><br>
            <input type="email" class="form-control" name="email" placeholder="johndoe@proton.com"><br>
            <label>Age</label><br>
            <input type="text" class="form-control" name="age" placeholder="99"><br>
            <label>Gender</label><br>
            <input type="text" class="form-control" name="gender" placeholder="Orc"><br>
            <input type="submit" class="btn btn-primary register-btn" placeholder="Submit">
        </form>
        or <a href="login.php?">login</a>
        
    </div>

    <!-- Script -->
    <script src="./js/index.js"></script>
</body>
</html>