<?php

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=phplog', 'root', 'root');
    } catch (PDOException $e) {
        exit('ERROR: Can\'t reach database, make sure your login informations are correct.');
    }

?>