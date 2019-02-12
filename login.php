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
    <link rel="stylesheet" href="./css/style.css">
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

    <script src="./js/index.js"></script>

</body>
</html>