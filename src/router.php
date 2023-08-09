<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => './src/controllers/home.php',
    '/about' => './src/controllers/about.php',
    '/notes' => './src/controllers/notes.php'
];

function routeToController($uri, $routes)
{
    if (!array_key_exists($uri, $routes)) {
        abortTo404();
    }

    require $routes[$uri];
}

function abortTo404($code = 404)
{
    http_response_code($code);
    require __DIR__ . "/views/{$code}.php";
    die();
}
