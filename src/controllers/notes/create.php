<?php
$config = require base_path('src/models/config.php');
$db = new Database($config['database']);
require base_path('src/models/Validator.php');

$errors = [];
if (Validator::email('visdasd')) {
    dd('invalido');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (Validator::string(
        $_POST['body'],
        0,
        1000
    ) === true) {
        $errors['body'] = 'O campo precisa preenchido e possuir até 1.000 caracteres para prosseguir';
    }

    if (empty($errors) === true) {
        $db->query(
            'insert into texts(body, user_id) values (:body, :user_id);',
            [
                'body' => $_POST['body'],
                'user_id' => 1
            ]
        );
        header('location: /notes');
    }
}

view('notes/create', [
    'errors' => $errors
]);
