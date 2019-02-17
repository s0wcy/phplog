<?php

    include 'database.php';

    function search() {
        $searchq = $_POST['search'];
        $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

        $query = $GLOBALS['pdo']->prepare("SELECT * FROM articles WHERE title LIKE %$keyword%");
        $query->execute();

        $result = $query->fetch();

        if(!empty($result)) {
            return $result;
        } else {
            return false;
        }
    }