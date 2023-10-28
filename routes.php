<?php

use Core\App;
use Core\Router;

App::bind('Core\Router', function () {
    $router = new Router();

    // OTHER PAGES ROUTER
    $router->get('/', 'index.php');
    $router->get('/about', 'about.php');
    $router->get('/contact', 'contact.php');

    // NOTES 
    $router->get('/notes', 'notes/index.php')->only('auth');
    $router->get('/note', 'notes/show.php');
    $router->delete('/note', 'notes/destroy.php');
    $router->get('/notes/create', 'notes/create.php');
    $router->post('/notes/create', 'notes/store.php');
    $router->get('/note/edit', 'notes/edit.php');
    $router->patch('/note', 'notes/update.php');

    // REGISTER ROUTER
    $router->get('/register', 'register/create.php')->only('guest');
    $router->post('/register', 'register/store.php');

    // LOGIN SESSION
    $router->get('/session', 'session/create.php')->only('guest');
    $router->post('/session', 'session/store.php')->only('guest');
    $router->delete('/session', 'session/destroy.php')->only('auth');

    return $router;
});
