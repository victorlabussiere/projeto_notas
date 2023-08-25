<?php

use Core\Database;

$config = (require BASE_PATH . "Core/config.php")['database'];

$db = new Database($config);

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
