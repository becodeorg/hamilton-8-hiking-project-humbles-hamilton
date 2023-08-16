<?php


$router->get('/', 'controllers/index.php');
$router->get('/hikes/show', 'controllers/hikes/show.php');
$router->get('/hikes/create', 'controllers/hikes/create.php');
$router->get('/subscribe/create', 'controllers/subscribe/create.php');
$router->get('/register', 'controllers/register.php');


$router->post('/hikes/create', 'controllers/hikes/store.php');
$router->post('/subscribe', 'controllers/subscribe/store.php');
