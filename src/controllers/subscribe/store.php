<?php

use Core\Validator;

require basePath('/Core/validator.php');



$errors = [];

$savedText = [];



// Données à insérer
$insertData = [
    'firstname' => $_POST['firstname'],
    'lastname' => $_POST['lastname'],
    'nickname' => $_POST['nickname'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
];



if (Validator::string($_POST['password'], 7)) {

    $errors['password'] = 'Password must be at least 7 characters';
    $savedText['password'] = $_POST['password'];
    // $savedText['lastname'] = $_POST['lastname'];
    // $savedText['firstname'] = $_POST['firstname'];
    // $savedText['nickname'] = $_POST['nickname'];
    // $savedText['email'] = $_POST['email'];
};

if (!Validator::verifEmail($_POST['email'])) {
    $errors['email'] = 'Please, provide a valid email adress';
    $savedText['email'] = $_POST['email'];
}

if (empty($errors)) {

    try {
        $pdo = new PDO('mysql:host=188.166.24.55;dbname=hamilton-8-humbles', 'humbles-admin', 'xpjJMDkf1i92fY2h');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

    // Requête d'insertion avec des paramètres nommés
    $query = "INSERT INTO `users` (`firstname`, `lastname`, `nickname`, `email`, `password`) VALUES (:firstname, :lastname, :nickname, :email, :password)";

    // Préparation de la requête
    $insertStatement = $pdo->prepare($query);

    $insertStatement->execute($insertData);

    header('location: /');

    die();
}

require basePath('views/subscribe.view.php');
