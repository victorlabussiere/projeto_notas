<?php

use Core\Router;
use Core\Database;


const BASE_PATH = __DIR__ . '/../';

require base_path('Core/Response.php');
function base_path($file)
{
    return BASE_PATH . $file;
}

require base_path('Core/functions.php');
function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/pages/' . $path . '.view.php');
}

spl_autoload_register(function ($class) {

    $class = str_replace('\\', '/', $class);

    require base_path("{$class}.php");
});





$config = require base_path('Core/config.php');
$db = new Database($config['database']);

$router = new Router();
$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];


$router->route($uri, $method);
