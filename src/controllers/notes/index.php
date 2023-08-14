<?php
$config = require("./src/models/config.php");
$db = new Database($config['database']);
$query = 'select * from texts';
$notes = $db->query($query)->get();

require 'src/views/pages/notes/index.view.php';
