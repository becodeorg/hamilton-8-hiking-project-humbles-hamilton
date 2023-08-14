<?php


$router->get('/', 'controllers/index.php');
$router->get('/hikes/show', 'controllers/hikes/show.php');
$router->get('/hikes/create', 'controllers/hikes/create.php');
$router->get('/subscribe', 'controllers/subscribe.php');
