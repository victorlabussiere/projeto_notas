<?php

use Core\App;

$db = App::resolve(Core\Database::class);

$query = 'select * from texts';
$notes = $db->query($query)->get();

view(
    'notes/index',
    [
        'heading' => 'Suas notas',
        'notes' => $notes,
        'query' => $query
    ]
);
