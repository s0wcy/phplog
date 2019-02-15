<?php

    $title = 'Title Test';
    $text = 'lorem  ipsssssssssssssssssssskvhkvbfk bksjefb fhEB foefgh ofOE OUGEBRFO BSEF gfdgggr.';

?>

<div class="row article-row">
    <div class="col-md-4">
        <a href="article.php?id=1" class="container article article-1">
            <div class="row-fluid article-img">
                <h2 class="article-title"><?= $title; ?></h2>
                <div class="article-icon"></div>
            </div>
            <div class="row-fluid">
                <p class="article-text"><?= $text; ?></p>
            </div>
        </a>
    </div>
</div>