<?php 

    include_once('../includes/database.php');

    if(isset($_GET['id'])) {
        $query = $GLOBALS['pdo']->prepare("SELECT * FROM articles WHERE id=?");
        $query->execute([$_GET['id']]);
        $article = $query->fetch();
    } else {
        header('Location:index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<?php require_once('../includes/head.php') ?>

<body>
    <!-- Header -->
    <?php include('../includes/header.php') ?>

    <!-- Main content -->
    <div class="container main">

        <img src="./medias/img/<?= $article->image; ?>" class="row-fill article-head"></img>
        <div class="row article-infos">
            <h2 class="col-md-6 article-title"><?= $article->title; ?></h2>
            <div class="col-md-6 article-meta">
                <div class="author"><?= $article->author; ?></div>
                <div class="date"><?= $article->date; ?></div>
            </div>
        </div>
        <div class="article-content"><?= $article->content; ?></div>

    </div>

    <!-- Script -->
    <script src="./js/index.js"></script>
</body>

</html>