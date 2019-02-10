<?php

    session_start();
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "phplog";
    $message = "";

    try {
        $connect = new PDO("mysql:host=$host; dbname=$phplog, $username, $password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(isset($POST
    } catch {

    }

?>