<?php 

    include_once('../includes/database.php');

    $query = $GLOBALS['pdo']->query("SELECT * FROM articles LIMIT 9");
    $articles = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<?php require_once('../includes/head.php') ?>

<body>
    <!-- Header -->
    <?php include_once('../includes/header.php') ?>

    <!-- Main content -->
    <div class="container main">

        <!-- Landing -->
        <div class="row landing-row">
            <div class="col-md-10 landing-col">
                <h2 class="landing-title">Hello world,</h2>
                <p class="landing-subtitle">Welcome to my blog!</p>
            </div>
        </div>

        <!-- Articles -->
        <div class="row article-row article-row-1">
            <?php foreach($articles as $_article): ?>
                <div class="col-md-4 article-preview">
                    <a href="article.php?id=<?= $_article->id; ?>" class="container article article-1">
                        <div class="row-fluid article-vignette">
                            <img src="../static/medias/img/<?= $_article->image; ?>" alt="<?= $_article->image; ?>" class="article-img">
                            <h2 class="article-title"><?= $_article->title; ?></h2>
                            <div class="article-icon"></div>
                        </div>
                        <div class="row-fluid">
                            <p class="article-text"><?= substr($_article->content, 0, 120).'...'; ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row article-row article-row-2">
            <?php foreach($articles as $_article): ?>
                <div class="col-md-4 article-preview">
                    <a href="article.php?id=<?= $_article->id; ?>" class="container article article-1">
                        <div class="row-fluid article-vignette">
                            <img src="../static/medias/img/<?= $_article->image; ?>" alt="<?= $_article->image; ?>" class="article-img">
                            <h2 class="article-title"><?= $_article->title; ?></h2>
                            <div class="article-icon"></div>
                        </div>
                        <div class="row-fluid">
                            <p class="article-text"><?= substr($_article->content, 0, 120).'...'; ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <!-- FOOTER -->
    <?php include_once('../includes/footer.php') ?>

    <!-- Script -->
    <script src="./js/index.js"></script>
</body>

</html>