<?php

use Core\App;

$db = App::resolve(Core\Database::class);

$currentUserId = 1;

$note = $db->query('select * from texts where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorizate($note['user_id'] === $currentUserId);

$db->query('delete from texts where id = :id', [
    'id' => $_POST['id']
]);

header('location: /notes');
exit();
