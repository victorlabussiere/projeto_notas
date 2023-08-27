<?php

use Core\App;
use Core\Container;
use Core\Database;

$container = new Container();

// DATABASE BOOTSTRAP
App::setContainer($container);
App::bind('Core\Database', function () {
    $config = require base_path('config.php');

    return new Database($config['database']);
});
