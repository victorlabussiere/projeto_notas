<?php
$config = require("./src/models/config.php");
$db = new Database($config['database']);
$query = 'select * from texts';
$notes = $db->query($query)->get();

require __DIR__ . '/../views/pages/notes.view.php';
