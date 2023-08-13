<?php
$config = require __DIR__ . '/../models/config.php';
$db = new Database($config['database']);
require __DIR__ . '/../models/Validator.php';

if (Validator::email('visdasd')) {
    dd('invalido');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if (!Validator::string(
        $_POST['body'],
        0,
        1000
    )) {
        $errors['body'] = 'O campo precisa preenchido e possuir até 1.000 caracteres para prosseguir';
    }

    if (empty($errors)) {
        $db->query(
            'insert into texts(body, user_id) values (:body, :user_id);',
            [
                'body' => $_POST['body'],
                'user_id' => 1
            ]
        );
    }
}

require __DIR__ . '/../views/pages/notes-create.view.php';
