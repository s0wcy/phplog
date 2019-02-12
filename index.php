<?php 

    include_once('./includes/database.php');

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

    <header class="container">
        <h1 class="header-logo">blog.achabe.com</h1>
        
        <nav class="header-nav">
            <div class="burger">
                <span class="burger-el burger-el-1"></span>
                <span class="burger-el burger-el-2"></span>
                <span class="burger-el burger-el-3"></span>
                <span class="burger-el burger-el-4"></span>
            </div>
            <form class="search">
                <input type="text" class="search-input">
                <input type="submit" class="search-btn" value="">
            </form>
        </nav>

        <div class="header-social">
            <a href="https://twitter.com/SaucySpray" class="social-el social-el-1"></a>
            <a href="https://github.com/SaucySpray" class="social-el social-el-2"></a>
            <a href="http://www.achabe.com/" class="social-el social-el-3"></a>
        </div>
    </header>

    <div class="container main">
        <div class="row landing-row">
            <div class="col-md-7 offset-md-1 landing-col">
                <h2 class="landing-title">Bonjour,</h2>
                <p class="landing-subtitle">Welcome to my blog!</p>
            </div>
            <div class="col-md-3 landing-col">
                <h2 class="landing-content">Test</h2>
            </div>
        </div>

        <div class="row article-row">
            <div class="col-md-4">
                <a href="article.php?id=1" class="container article article-1">
                    <div class="row-fluid article-img">
                        <h2 class="article-title">My first Dribbble Shot</h2>
                        <div class="article-icon"></div>
                    </div>
                    <div class="row-fluid">
                        <p class="article-text">Hello Dribbble, I’m Alexandre Chabeau. I’m happy to be part of the community , I’m here to learn and share inspirations and I hope you’ll like my first shot as a player ! I would like to thanks @Cr. Cruz for the invitation, and @yoangross !</p>
                    </div>
                </a>
        </div>
    </div>

    <script src="./js/index.js"></script>

</body>
</html>