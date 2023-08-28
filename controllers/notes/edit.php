<?php

use Core\App;

$db = App::resolve('Core\Database');

$note = $db->query('select * from texts where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

$user = $db->query('select * from users where id = :id', [
    'id' => $note['user_id']
])->findOrFail();

view('notes/edit', [
    'note' => $note,
    'errors' => [],
    'heading' => "Editar Nota."
]);
