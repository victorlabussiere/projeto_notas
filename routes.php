<?php

use Core\App;
use Core\Router;

App::bind('Core\Router', function () {
    $router = new Router();

    $router->get('/', 'controllers/index.php');
    $router->get('/about', 'controllers/about.php');
    $router->get('/contact', 'controllers/contact.php');

    $router->get('/notes', 'controllers/notes/index.php');

    $router->get('/notes/create', 'controllers/notes/create.php');
    $router->post('/notes/create', 'controllers/notes/store.php');

    $router->get('/note', 'controllers/notes/show.php');
    $router->delete('/note', 'controllers/notes/destroy.php');

    return $router;
});
