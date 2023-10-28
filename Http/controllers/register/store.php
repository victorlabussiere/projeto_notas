<?php

use Core\App;

$db = App::resolve('Core\Database');

$user = $db->query('select * from users where email = :email', [
    'email' => trim($_POST['email'])
])->findOrFail();

$senha = trim($_POST['senha']);

// check if account already exists

try {
    if ($user) {
        throw new Exception('Usuário já cadastrado em nosso banco de dados');
    }

    $db->query('INSERT into users (nome, senha, email) values (:nome, :senha, :email)', [
        'nome' => $_POST['nome'],
        'senha' => password_hash($senha, PASSWORD_DEFAULT),
        'email' => $_POST['email']
    ]);

    // and then log in the user and redirect
    $_SESSION['user'] = [
        'email' => $email,
        'nome' => $_POST['nome']
    ];

    header('location: /');
    exit();
} catch (Exception $e) {
    return view('register/create', [
        'heading' => "Novo Usuário",
        'feedback' => $e->getMessage()
    ]);
}
