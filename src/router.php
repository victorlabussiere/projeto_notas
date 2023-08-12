<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$path = [
    'home' => ['path' => './src/controllers/home.php', 'heading' => 'Home'],
    'notas' => ['path' => './src/controllers/notas.php', 'heading' => 'Notas'],
    'about' => ['path' => './src/controllers/about.php', 'heading' => 'Sobre nós'],
    'contact' => ['path' => './src/controllers/contact.php', 'heading' => 'Contato'],
    'note' => ['path' => './src/controllers/note.php', 'heading' => 'Nota']
];

$routes = [
    '/' => $path['home'],
    '/notes' => $path['notas'],
    '/about' => $path['about'],
    '/contact' => $path['contact'],
    '/note' => $path['note']
];

function routeToController($uri, $routes)
{
    if (!array_key_exists($uri, $routes)) {
        return abortTo404();
    }

    require $routes[$uri]['path'];
}

function abortTo404($code = 404)
{
    http_response_code($code);
    require __DIR__ . "/views/pages/{$code}.php";
    die();
}
