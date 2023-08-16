<?php


function dd($value)
{

    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

function urlIs($value)
{


    return parse_url($_SERVER['REQUEST_URI'])['path'] === $value;
}

function basePath($path)
{

    return BASE_PATH . $path;
}

function abort($code = 404)
{
    http_response_code($code);

    require basePath("views/{$code}.view.php");

    die();
}
