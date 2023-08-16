<?php

$path = [
    'home' => [
        'path' => './controllers/home.php',
        'heading' => 'Home'
    ],
    'about' => [
        'path' => './controllers/about.php',
        'heading' => 'Sobre nós'
    ],
    'contact' => [
        'path' => './controllers/contact.php',
        'heading' => 'Contato'
    ],
    'notes' => [
        'path' => './controllers/notes/index.php',
        'heading' => 'Notas'
    ],
    'show' => [
        'path' => './controllers/notes/show.php',
        'heading' => 'Nota'
    ],
    'create' => [
        'path' => './controllers/notes/create.php',
        'heading' => 'Nova Nota'
    ]
];

return $routes = [
    '/' => $path['home'],
    '/about' => $path['about'],
    '/contact' => $path['contact'],
    '/notes' => $path['notes'],
    '/note' => $path['show'],
    '/create' => $path['create']
];
