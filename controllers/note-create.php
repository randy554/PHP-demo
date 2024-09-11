<?php

require 'Validator.php';

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Store Potential Errors
    $errors = [];


    // If User Form Submission Is Empty
    if (! Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of no more than 1,000 characters is required';
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