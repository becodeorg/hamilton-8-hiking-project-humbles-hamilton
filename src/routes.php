<?php


$router->get('/', 'controllers/index.php');
$router->get('/hikes/show', 'controllers/hikes/show.php');
$router->get('/hikes/create', 'controllers/hikes/create.php');
$router->get('/subscribe/create', 'controllers/subscribe/create.php');
$router->get('/hikes/filter', 'controllers/hikes/filter.php');
$router->get('/login', 'controllers/login/create.php');
$router->get('/profile/create', 'controllers/profile/create.php');
$router->get('/editProfile/create', 'controllers/editProfile/create.php');



$router->post('/hikes/create', 'controllers/hikes/store.php');
$router->post('/subscribe', 'controllers/subscribe/store.php');
$router->post('/hikes/show', 'controllers/hikes/show.php');
