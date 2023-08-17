<?php

$heading = 'All Hikes';



try {
    $pdo = new PDO('mysql:host=188.166.24.55;dbname=hamilton-8-humbles', 'humbles-admin', 'xpjJMDkf1i92fY2h');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

// Exemple de requête


function queryConstruct($base, $filter)
{
    return $base . " " . $filter;
}

if (isset($_POST['tag'])) {

    $tag = $_POST['tag'];

    $querySelect = "SELECT * FROM hikes";
    $queryWhere = "WHERE hike_id = " . $tag;
} else {

    $querySelect = "SELECT * FROM hikes";
    $queryWhere = "";
}


$query = queryConstruct($querySelect, $queryWhere);


$result = $pdo->query($query);

// Créer un tableau pour stocker les résultats des randonnées
$hikes = array();

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $hikes[] = $row;
}



// Maintenant, vous pouvez accéder aux données des randonnées

require  basePath('/views/show.view.php');
