<?php
require __DIR__ . '/src/functions.php';
require __DIR__ . '/src/router.php';

routeToController($uri, $routes);
