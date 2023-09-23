<?php

use Core\App;

$name = $_POST['name'];
$senha = $_POST['senha'];
$email = $_POST['email'];

$db = App::resolve('Core\Database');

$user = $db->query('select * from users where email = :email', [
    'email' => $_POST['email']
])->find();

if ($user) {                        // check if account already exists
    header('location: /');  // if so, redirect to login page
    exit();
} else {                            // if not, save on the database and then, log in the user and redirect
    $db->query('INSERT into users (nome, senha, email) values (:nome, :senha, :email)', [
        'nome' => $name,
        'senha' => $senha,
        'email' => $email
    ]);

    $_SESSION['user'] = [
        'email' => $email
    ];

    header('location: /');
    exit();
}
