<?php

    include_once 'user.php';

    if(isset($_GET['logout']) && $_GET['logout'] == true) {
        $exit = disconnect();
    }

    var_dump($_SESSION);

?>
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

    <div class="header-connect">
        <a href="#" class="connect-el login"></a>
        <a href="#" class="connect-el register"></a>
        <a href="./?logout=true" class="connect-el disconnect"></a>
    </div>

    <!-- <div class="header-social">
        <a href="https://twitter.com/SaucySpray" class="social-el social-el-1"></a>
        <a href="https://github.com/SaucySpray" class="social-el social-el-2"></a>
        <a href="http://www.achabe.com/" class="social-el social-el-3"></a>
    </div> -->
</header>