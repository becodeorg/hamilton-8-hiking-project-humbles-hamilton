<?php

declare(strict_types=1);

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . '/core/functions.php';


spl_autoload_register(function ($class) {


    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);


    require basePath($class . ".php");
});

$router = new \core\Router();
$routes = require basePath('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
