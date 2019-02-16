<?php

    $title = 'My first Dribbble Shot';
    $text = 'Hello Dribbble, I’m Alexandre Chabeau. I’m happy to be part of the community , I’m here to learn and share inspirations and I hope you’ll like my first shot as a player ! I would like to thanks @Cr. Cruz for the invitation, and @yoangross !';

?>

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