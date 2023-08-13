<?php

$path = [
    'home' => ['path' => './src/controllers/home.php', 'heading' => 'Home'],
    'notes' => ['path' => './src/controllers/notes.php', 'heading' => 'Notas'],
    'about' => ['path' => './src/controllers/about.php', 'heading' => 'Sobre nós'],
    'contact' => ['path' => './src/controllers/contact.php', 'heading' => 'Contato'],
    'note' => ['path' => './src/controllers/note.php', 'heading' => 'Nota'],
    'note_create' => ['path' => './src/controllers/notes-create.php', 'heading' => 'Nota']
];

return $routes = [
    '/' => $path['home'],
    '/notes' => $path['notes'],
    '/about' => $path['about'],
    '/contact' => $path['contact'],
    '/note' => $path['note'],
    '/create' => $path['note_create']
];
