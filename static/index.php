<?php 

    include_once('./includes/database.php');

?>

<!DOCTYPE html>
<html lang="en">

<?php require_once('../includes/head.php') ?>

<body>
    <!-- Header -->
    <?php require_once('../includes/header.php') ?>

    <!-- Main content -->
    <div class="container main">

        <!-- Landing -->
        <div class="row landing-row">
            <div class="col-md-7 offset-md-1 landing-col">
                <h2 class="landing-title">Bonjour,</h2>
                <p class="landing-subtitle">Welcome to my blog!</p>
            </div>
            <div class="col-md-3 landing-col">
                <h2 class="landing-content">Test</h2>
            </div>
        </div>

        <!-- Article -->
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

    </div>

    <!-- Script -->
    <script src="./js/index.js"></script>
</body>

</html>