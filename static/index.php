<?php 

    include_once('../includes/database.php');

?>

<!DOCTYPE html>
<html lang="en">

<?php require_once('../includes/head.php') ?>

<body>
    <!-- Header -->
    <?php include('../includes/header.php') ?>

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

        <!-- Articles -->
        <div class="row article-row">
            <?php include('../includes/article.php') ?>
            <?php include('../includes/article.php') ?>
            <?php include('../includes/article.php') ?>
        </div>

    </div>

    <!-- Script -->
    <script src="./js/index.js"></script>
</body>

</html>