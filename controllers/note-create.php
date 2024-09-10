<?php

$config = require("config.php");
$db = new Database($config['database']);

$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Store potential errors
    $errors = [];

    // If User Form Submission Is Empty
    if (strlen($_POST['body']) === 0) {
        $errors['body'] = 'A body is required';
    }

    // If User Form Submission Is Too Long
    if (strlen($_POST['body']) > 1000) {
        $errors['body'] = 'The body can not be more than 1,000 characters';
    }

    // If There Are No Form Errors Then Submit Form To DB
    if (empty($errors)) {
        
        $db->query('INSERT INTO notes (body, user_id) VALUES (?, ?)', [
            $_POST["body"],
            1
        ]);

    }

}

require 'views/note-create.view.php';