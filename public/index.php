<?php

use Core\App;

const BASE_PATH = __DIR__ . '/../';

require base_path('Core/Response.php');

function base_path($file)
{
    return BASE_PATH . $file;
}

require base_path('functions.php');
function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/pages/' . $path . '.view.php');
}

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require base_path("{$class}.php");
});

// BOOTSTRAP CONTAINERS
require base_path('bootstrap.php');
require base_path('routes.php');

// SETTING ROUTER
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

// APP RUNNING
session_start();
App::resolve('Core\Router')->route($uri, $method);
