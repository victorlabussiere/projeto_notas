<?php

use Core\App;
use Core\Validator;

$db = App::resolve('Core\Database');

$note = $db->query('select * from texts where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

$user = $db->query('select * from users where id = :id', [
    'id' => $note['user_id']
])->findOrFail();

$currentUser = 1;

authorizate($user['id'] === $currentUser);

if (
    Validator::string(
        $_POST['body'],
        0,
        1000
    ) === false
) $errors['body'] = 'O campo precisa preenchido e possuir até 1.000 caracteres para prosseguir';

if (empty($errors['body']) === false) {
    return view('notes/edit', [
        'errors' => $errors,
        'heading' => 'Editar Nota'
    ]);
}

$db->query('update texts set body = :body where id = :id', [
    'body' => $_POST['body'],
    'id' => $_POST['id']
]);

header("location: /note/edit?id=" . $note['id']);
