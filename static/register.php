<?php 

    include_once('./includes/database.php');
    include_once('./includes/user.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPlog - achabe.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <header class="container" style="margin-bottom: 60px;">
        <h1 class="header-logo">blog.achabe.com</h1>
        
        <nav class="header-nav" style="width: 294px;">
            <form class="search">
                <input type="text" class="search-input">
            </form>
            <div class="search-btn"></div>
        </nav>

        <div class="header-social">
            <a href="https://twitter.com/SaucySpray" class="social-el social-el-1"></a>
            <a href="https://github.com/SaucySpray" class="social-el social-el-2"></a>
            <a href="http://www.achabe.com/" class="social-el social-el-3"></a>
        </div>
    </header>

    <div class="container main">
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

    <script src="./js/index.js"></script>

</body>
</html>