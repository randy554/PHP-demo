<?php

$config = require("config.php");
$db = new Database($config['database']);


$heading = "Note";
// Hardcoded User ID For Testing
$currentUserId = 1;

// Query DB With SQL Injection In Mind - Method 1
$note = $db->query("SELECT * FROM notes WHERE id = ?", [
    
    $_GET["id"]
    
])->findOrFail();


// Show 403, If Unauthorized Access Occurs
authorize($note['user_id'] === $currentUserId);


require "views/notes/show.view.php";


