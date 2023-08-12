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

$notes = $db->query(
    $query,
    [$id]
)->fetchAll();

function renderList($notes)
{
    foreach ($notes as $note) {
        echo
        "<a class='block text-lime-600 hover:text-lime-700 hover:underline' href='/note?id={$note['id']}'>
            {$note['body']}
        </a>";
    }
}

require __DIR__ . '/../views/pages/notes.view.php';
