<?php

$path = [
    'home' => [
        'path' => './src/controllers/home.php',
        'heading' => 'Home'
    ],
    'about' => [
        'path' => './src/controllers/about.php',
        'heading' => 'Sobre nós'
    ],
    'contact' => [
        'path' => './src/controllers/contact.php',
        'heading' => 'Contato'
    ],
    'notes' => [
        'path' => './src/controllers/notes/index.php',
        'heading' => 'Notas'
    ],
    'show' => [
        'path' => './src/controllers/notes/show.php',
        'heading' => 'Nota'
    ],
    'create' => [
        'path' => './src/controllers/notes/create.php',
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
