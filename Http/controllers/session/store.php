<?php

use Core\App;

$db = App::resolve('Core\Database');

try {
    // buscar resultado por e-mail
    $searchResult = $db->query('select email, senha, nome, id from users where email = :email', [
        'email' => $_POST['email']
    ])->findOrFail();

    if (!$searchResult) {   // tratar resultado negativo
        throw new \Exception('Usuário não encontrado');
    }

    // verificar senha
    if (password_verify($_POST['senha'], $searchResult['senha'])) {
        throw new \Exception('Verifique seu e-mail e/ou senha.');   // tratar senha inválida
    }

    // conceder passport
    $_SESSION['user'] = [
        'email' => $searchResult['email'],
        'nome' => $searchResult['nome'],
        'id' => $searchResult['id']
    ];

    header('location: /');  // direcionar para tela principal com feedback
    exit();                         // encerrar operação
} catch (Exception $e) {
    // no user found
    return view('session/login', [
        'errorFeedback' => $e->getMessage(),
        'heading' => 'Login'
    ]);
}
