<?php

    include_once 'user.php';
    include_once 'search.php';

    if(isset($_GET['logout']) && $_GET['logout'] == true) {
        $exit = logout();
    }

?>
<footer>
    
    <div class="footer-code">
        All my <a href="https://github.com/SaucySpray/phplog" class="green">code</a> is available on github!
    </div>

    <div class="footer-social">
        <a href="https://twitter.com/SaucySpray" class="social-el social-el-1"></a>
        <a href="https://github.com/SaucySpray" class="social-el social-el-2"></a>
        <a href="http://www.achabe.com/" class="social-el social-el-3"></a>
    </div>
    
</footer>