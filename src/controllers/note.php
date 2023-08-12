<?php
require './src/models/Database.php';
$config = require("./src/models/config.php");
$db = new Database($config['database']);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = 'select * from texts where id = ?';
} else {
    $id = -1;
    $query = 'select * from texts where id > ?';
}

$text = $db->query(
    $query,
    [$id]
)->fetch();

require __DIR__ . '/../views/pages/note.view.php';
