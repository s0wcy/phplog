<?php

    include_once '../includes/database.php';

    function search($_searchq) {
        $_searchq = preg_replace("#[^0-9a-z]#i","",$_searchq);

        $query = $GLOBALS['pdo']->query("SELECT * FROM articles WHERE title LIKE '%$_searchq%'");

        $result = $query->fetchAll();

        if(!empty($result)) {
            return $result;
        } else {
            return false;
        }
    }

    if(isset($_GET['search'])) {
        $result = search($_GET['search']);
    }
?>

<!DOCTYPE html>
<html lang="en">

<?php require_once('../includes/head.php') ?>

    <!-- Header -->
    <?php include_once('../includes/header.php') ?>

    <!-- MAIN -->
    <div class="container" style="min-height: 100vh;">
        <?php if(!empty($result)) {
            foreach($result as $_article): ?>
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
            <?php endforeach;
        } else { ?>
            <h3>Sorry your request didn't match any of my articles :'( </h3>
        <?php } ?>
    </div>

    <!-- FOOTER -->
    <?php include_once('../includes/footer.php') ?>

    <!-- Script -->
    <script src="./js/index.js"></script>
</html>