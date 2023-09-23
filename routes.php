<?php

use Core\App;
use Core\Router;

App::bind('Core\Router', function () {
    $router = new Router();

    // OTHER PAGES ROUTER
    $router->get('/', 'controllers/index.php');
    $router->get('/about', 'controllers/about.php');
    $router->get('/contact', 'controllers/contact.php');

    // NOTES 
    $router->get('/notes', 'controllers/notes/index.php')->only('auth');
    $router->get('/note', 'controllers/notes/show.php');
    $router->delete('/note', 'controllers/notes/destroy.php');
    $router->get('/notes/create', 'controllers/notes/create.php');
    $router->post('/notes/create', 'controllers/notes/store.php');
    $router->get('/note/edit', 'controllers/notes/edit.php');
    $router->patch('/note', 'controllers/notes/update.php');

    // REGISTER ROUTER
    $router->get('/register', 'controllers/register/create.php')->only('guest');
    $router->post('/register', 'controllers/register/store.php');

    return $router;
});
