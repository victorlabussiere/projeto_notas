<?php
require __DIR__ . '/../../src/models/Database.php';
$config = require("./src/models/config.php");
$db = new Database($config['database']);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = 'select * from texts where id = ?';
} else {
    $id = -1;
    $query = 'select * from texts where id > ?';
}

$notes = $db->query(
    $query,
    [$id]
)->fetchAll();

require __DIR__ . '/../views/pages/notes.view.php';
