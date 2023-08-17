<?php

try {
    $pdo = new PDO('mysql:host=188.166.24.55;dbname=hamilton-8-humbles', 'humbles-admin', 'xpjJMDkf1i92fY2h');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

// Requête d'insertion avec des paramètres nommés
$query = "INSERT INTO `hikes` (`name`, `distance`, `elevation_gain`, `description`, `duration`, `created_at`) VALUES (:name, :distance, :elevation_gain, :description, :duration, NOW())";

// Préparation de la requête
$insertStatement = $pdo->prepare($query);

// Données à insérer
$insertData = [
    'name' => $_POST['name'],
    'distance' => $_POST['distance'],
    'elevation_gain' => $_POST['elevation_gain'],
    'description' => $_POST['description'],
    'duration' => $_POST['duration'],
];

// Exécution de la requête d'insertion
$insertStatement->execute($insertData);

header('location: /hikes/show');

die();
