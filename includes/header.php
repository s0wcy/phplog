<?php

    include_once 'user.php';
    include_once 'search.php';

    if(isset($_GET['logout']) && $_GET['logout'] == true) {
        $exit = logout();
    }

    if(isset($_POST['search'])) {
        search()
    }

?>
<header class="container">
    <h1 class="header-logo" onclick="window.location='/phplog/static/index.php'">blog.achabe.com</h1>
    
    <nav class="header-nav">
        <?php if(!basename($_SERVER['PHP_SELF']) == 'login.php' && !basename($_SERVER['PHP_SELF']) == 'register.php') { ?>
            <div class="burger">
                <span class="burger-el burger-el-1"></span>
                <span class="burger-el burger-el-2"></span>
                <span class="burger-el burger-el-3"></span>
                <span class="burger-el burger-el-4"></span>
            </div>
        <?php } ?>
        <form action="?" method="get" class="search">
            <input type="text" class="search-input">
            <input type="submit" class="search-btn" value="">
        </form>
    </nav>

    <div class="header-connect">
        <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) { ?>
            <a href="?logout=true" class="connect-el logout"></a>
        <?php } else { ?>
            <a href="/phplog/static/login.php" class="connect-el login"></a>
        <?php } ?>
    </div>

    <!-- <div class="header-social">
        <a href="https://twitter.com/SaucySpray" class="social-el social-el-1"></a>
        <a href="https://github.com/SaucySpray" class="social-el social-el-2"></a>
        <a href="http://www.achabe.com/" class="social-el social-el-3"></a>
    </div> -->
</header>