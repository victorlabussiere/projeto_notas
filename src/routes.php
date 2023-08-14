<?php

$path = [
    'home' => ['path' => './src/controllers/home.php', 'heading' => 'Home'],
    'about' => ['path' => './src/controllers/about.php', 'heading' => 'Sobre nós'],
    'contact' => ['path' => './src/controllers/contact.php', 'heading' => 'Contato'],
    'notes' => ['path' => './src/controllers/notes/index.php', 'heading' => 'Notas'],
    'note' => ['path' => './src/controllers/notes/show.php', 'heading' => 'Nota'],
    'note_create' => ['path' => './src/controllers/notes/create.php', 'heading' => 'Nota']
];

return $routes = [
    '/' => $path['home'],
    '/about' => $path['about'],
    '/contact' => $path['contact'],
    '/notes' => $path['notes'],
    '/note' => $path['note'],
    '/create' => $path['note_create']
];
