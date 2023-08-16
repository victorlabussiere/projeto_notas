<?php

use Core\Database;

$config = require base_path("Core/config.php");

$db = new Database($config['database']);

$id = $_GET['id'];
$query = 'select * from texts where id = :id';

$text = $db->query(
    $query,
    ['id' => $id]
)->find();

$user = $db->query(
    'select * from users where id = :id',
    ['id' => 1]
)->findOrFail();

authorizate($text['user_id'] === 1);

view('/notes/show', [
    'user' => $user,
    'text' => $text
]);
