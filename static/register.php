<?php 

    include_once '../includes/user.php' ;

    if(!empty($_POST)) {
        $reg = register([
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password_1' => $_POST['password_1'],
            'password_2' => $_POST['password_2'],
            'age' => $_POST['age'],
            'gender' => $_POST['gender']
        ]);

        if($reg != true) {
            echo $reg;
        } else {
            echo 'Everything is 👌';
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<?php require_once('../includes/head.php') ?>

<body>
    <!-- Header -->
    <?php include('../includes/header.php') ?>

    <!-- Main content -->
    <div class="container main">

        <!-- Register form -->
        <h3>Register</h3>
        <form action="register.php" method="post">
            <label for="username">Username</label><br>
            <input type="text" class="form-control" id="username" name="username" placeholder="JohnDoe"><br>

            <label for="email">Email</label><br>
            <input type="email" class="form-control" id="email" name="email" placeholder="johndoe@proton.com"><br>

            <label for="password_1">Password</label><br>
            <input type="password" class="form-control" id="password_1" name="password_1" placeholder="Password"><br>

            <label for="password_2">Confirm Password</label><br>
            <input type="password" class="form-control" id="password_2" name="password_2" placeholder="Password"><br>

            <label for="age">Age</label><br>
            <input type="text" class="form-control" id="age" name="age" placeholder="99"><br>

            <label for="gender">Gender</label><br>
            <input type="text" class="form-control" id="gender" name="gender" placeholder="Orc"><br>

            <input type="submit" class="btn btn-primary register-btn" value="Submit">
        </form>
        or <a href="login.php?">login</a>

    </div>

    <!-- Script -->
    <script src="./js/index.js"></script>
</body>
</html>