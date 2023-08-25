<?php

use Core\Database;
use Core\Validator;

$config = require base_path('Core/config.php');
$db = new Database($config['database']);


$erros = [];

if (
    Validator::string(
        $_POST['body'],
        0,
        1000
    ) === false
) $errors['body'] = 'O campo precisa preenchido e possuir até 1.000 caracteres para prosseguir';

if (empty($errors['body']) === false) {
    return view('notes/create', [
        'errors' => $errors,
        'heading' => "Nova nota"
    ]);
}

$db->query(
    'insert into texts(body, user_id) values (:body, :user_id);',
    [
        'body' => $_POST['body'],
        'user_id' => 1
    ]
);

header('location: /notes');
die();
