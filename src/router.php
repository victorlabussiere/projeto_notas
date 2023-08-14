<?php

$router = require(BASE_PATH . 'src/routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function routeToController($uri, $routes)
{
    if (!array_key_exists($uri, $routes)) {
        return abort();
    }

    require BASE_PATH . $routes[$uri]['path'];
}

function abort($code = 404)
{
    http_response_code($code);
    require  BASE_PATH . "src/views/pages/{$code}.php";
    die();
}
