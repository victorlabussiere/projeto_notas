<?php
$config = (require BASE_PATH . "src/models/config.php")['database'];

$db = new Database($config);

$query = 'select * from texts';
$notes = $db->query($query)->get();

view(
    'notes/index',
    [
        'notes' => $notes,
        'query' => $query
    ]
);
