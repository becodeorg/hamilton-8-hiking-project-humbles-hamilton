<?php
session_start();
require basePath('/core/Validator.php');

$errors = [];

// Check if the user is connected
if(isset($_SESSION['user_id'])) {
    // User is already connected, redirect to a different page
    header('Location: /');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        $errors['email'] = 'Email is required';
    }

    if (empty($password)) {
        $errors['password'] = 'Password is required';
    }

    if (empty($errors)) {
        try {
            $pdo = new PDO('mysql:host=188.166.24.55;dbname=hamilton-8-humbles');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
        }

        $query = "SELECT * FROM `users` WHERE `email` = :email";
        $selectStatement = $pdo->prepare($query);
        $selectStatement->execute(['email' => $email]);
        $user = $selectStatement->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id']; // Store user ID in session
            header('Location: /');
            exit;
        } else {
            $errors['login'] = 'Invalid email or password';
        }
    }
}
/*session_start();
require basePath('/core/Validator.php');

$errors = [];

// Check if the user is already authenticated (connected)
if(isset($_SESSION['user_id'])) {
    // User is already connected, redirect to a different page
    header('Location: /');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        $errors['email'] = 'Email is required';
    }

    if (empty($password)) {
        $errors['password'] = 'Password is required';
    }

    if (empty($errors)) {
        try {
            $pdo = new PDO('mysql:host=188.166.24.55;dbname=hamilton-8-humbles', 'humbles-admin', 'xpjJMDkf1i92fY2h');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            exit;
        }
        echo 'Connected to the database<br>';

        $query = "SELECT * FROM `users` WHERE `email` = :email";
        $selectStatement = $pdo->prepare($query);
        $selectStatement->execute(['email' => $email]);
        $user = $selectStatement->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            echo 'User found<br>';
            if (password_verify($password, $user['password'])) {
                echo 'Password is correct<br>';
                $_SESSION['user_id'] = $user['id']; // Store user ID in session
                header('Location: /');
                exit;
            } else {
                echo 'Password is incorrect<br>';
                $errors['login'] = 'Invalid email or password';
            }
        } else {
            echo 'User not found<br>';
            $errors['login'] = 'Invalid email or password';
        }
    }
}

require basePath('views/login.view.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        $errors['email'] = 'Email is required';
    }

    if (empty($password)) {
        $errors['password'] = 'Password is required';
    }

    if (empty($errors)) {
        try {
            $pdo = new PDO('mysql:host=188.166.24.55;dbname=hamilton-8-humbles', 'humbles-admin', 'xpjJMDkf1i92fY2h');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            exit;
        }

        echo 'Connected to the database<br>';

        $query = "SELECT * FROM `users` WHERE `email` = :email";
        $selectStatement = $pdo->prepare($query);
        $selectStatement->execute(['email' => $email]);
        $user = $selectStatement->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            echo 'User found<br>';
            if (password_verify($password, $user['password'])) {
                echo 'Password is correct<br>';
                $_SESSION['user_id'] = $user['id'];
                header('Location: /');
                exit;
            } else {
                echo 'Password is incorrect<br>';
                $errors['login'] = 'Invalid email or password';
            }
        } else {
            echo 'User not found<br>';
            $errors['login'] = 'Invalid email or password';
        }
    }
}

require basePath('views/login.view.php');
*/


