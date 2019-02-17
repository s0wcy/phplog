<?php

    session_start();

    // Include database
    include_once 'database.php';

/**
 * LOGIN
 */

    // Check si l'utilisateur existe :
        // Si non = ERREUR + Proposer de register
        // Si oui = Trouver l'id et comparer le mot de password hash & salt

    // Initialiser la session

/**
 * REGISTER
 */

    // Check if username or email are uniques
    function check_register($_username, $_email) {
        // Select all usernames and email equal to filled ones
        $query = $GLOBALS['pdo']->prepare("SELECT * FROM users WHERE username=?");
        $query->execute([$_username]);
        $user = $query->fetch();

        // If there is at least one match, return true
        if($user) {
            return true;
        } else {
            return false;
        }
    }

    // Hash password
    function hash_password($_password, $_username) {
        // Hash password and return result
        return password_hash( $_password, PASSWORD_BCRYPT);
    }

    function register($_user) {
        if(!check_register($_user['username'], $_user['email'])) {
            
            // Check if two passwords matches & hash it
            if($_user['password_1'] == $_user['password_2']) {
                $hashed_password = hash_password($_user['password_1'], $_user['username']);
            } else {
                return 'ERROR: The two passwords doesn\'t match.';
            }

            // prepare SQL request
            $prepare = $GLOBALS['pdo']->prepare(
                'INSERT INTO
                    users (username, email, password, age, gender)
                VALUES
                    (:username, :email, :password, :age, :gender)'
            );

            // Bind values from database
            $prepare->bindValue(':username',$_user['username']);
            $prepare->bindValue(':email',$_user['email']);
            $prepare->bindValue(':password',$hashed_password);
            $prepare->bindValue(':age',$_user['age']);
            $prepare->bindValue(':gender',$_user['gender']);

            $execute = $prepare->execute();

            // Confirm login status & username of the session
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $_user['username'];

            // Everything is 👌!
            return true;

        } else {
            return 'ERROR: Username or email already used.';
        }
    }

/**
 * DISCONNECT
 */

    function disconnect() {
        session_destroy();
        header("Refresh:0");
    }