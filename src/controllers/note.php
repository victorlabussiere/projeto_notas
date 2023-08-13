<?php
$config = require("./src/models/config.php");
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

require __DIR__ . '/../views/pages/note.view.php';
