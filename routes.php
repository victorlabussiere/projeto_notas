<?php

use Core\App;
use Core\Router;

App::bind('Core\Router', function () {
    $router = new Router();

    // OTHER PAGES ROUTER
    $router->get('/', 'controllers/index.php');
    $router->get('/about', 'controllers/about.php');
    $router->get('/contact', 'controllers/contact.php');

    // ALL NOTERS ROUTER
    $router->get('/notes', 'controllers/notes/index.php');

    // CREATE NOTE ROUTER
    $router->get('/notes/create', 'controllers/notes/create.php');
    $router->post('/notes/create', 'controllers/notes/store.php');

    // SHOW NOTE DETAILS ROUTER
    $router->get('/note', 'controllers/notes/show.php');
    $router->delete('/note', 'controllers/notes/destroy.php');

    // EDIT NOTE ROUTER
    $router->get('/note/edit', 'controllers/notes/edit.php');
    $router->patch('/note', 'controllers/notes/update.php');

    // REGISTER ROUTER
    $router->get('/register', 'controllers/register/create.php');
    $router->post('/register', 'controllers/register/store.php');

    return $router;
});
