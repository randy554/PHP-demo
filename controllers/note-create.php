<?php

$config = require("config.php");
$db = new Database($config['database']);

$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->query('INSERT INTO notes (body, user_id) VALUES (?, ?)', [
        $_POST["body"],
        1
    ]);
}

require 'views/note-create.view.php';