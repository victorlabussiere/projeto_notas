<?php

$router = require(__DIR__ . '/routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function routeToController($uri, $routes)
{
    if (!array_key_exists($uri, $routes)) {
        return abort();
    }

    require $routes[$uri]['path'];
}

function abort($code = 404)
{
    http_response_code($code);
    require __DIR__ . "/views/pages/{$code}.php";
    die();
}
