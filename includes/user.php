<?php
    // Start session
    session_start();

    // Include database
    include_once 'database.php';

/**
 * TOOLS
 */

    // Check if username or email are uniques
    function check_register($_username, $_email) {
        // If function is called with email argument, return an object with 
        if($_email != null) {
            $query = $GLOBALS['pdo']->prepare("SELECT * FROM users WHERE email=:email OR username=:username");
            $query->execute([
                'username'=>$_username,
                'email'=>$_email
            ]);
        } else {
            $query = $GLOBALS['pdo']->prepare("SELECT * FROM users WHERE username=?");
            $query->execute([$_username]);
        }
        $user = $query->fetch();

        // If there is at least one match, return object & success
        if($user) {
            return [
                'success' => true,
                'user' => $user
            ];
        } else {
            return false;
        }
    }

    // Hash password
    function hash_password($_password) {
        // Return hash result (need custom because md5 is 💩)
        return md5( $_password);
    }

/**
 * REGISTER
 */

    function register($_user) {
        if(!check_register($_user['username'], $_user['email'])) {
            
            // Check if two passwords matches & hash it
            if($_user['password_1'] == $_user['password_2']) {
                $hashed_password = hash_password($_user['password_1']);
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
 * LOGIN
 */

    function login($_user) {
        // Check only username with check_register
        $data = check_register($_user['username'], null);
        if($data['success'] == true) {

            if($data['user']->password == hash_password($_user['password'])) {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $_user['username'];
                header('Location:./index.php');
            } else {
                return 'Incorrect password !';
            }

        } else {
            return 'No match in db, pls register.';
        }
    }

/**
 * LOGOUT
 */

    function logout() {
        // Stop session
        session_destroy();

        // Redirecting to index.php
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = '/phplog/static';
        $extra = 'login.php';
        header("Location: http://$host$uri/$extra");
    }