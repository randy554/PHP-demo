<?php

$config = require("config.php");
$db = new Database($config['database']);


$heading = "Note";
// Hardcoded User ID For Testing
$currentUserId = 1;

// Query DB With SQL Injection In Mind - Method 1
$note = $db->query("SELECT * FROM notes WHERE id = ?", [
    
    $_GET["id"]
    
])->fetch();

// Query DB With SQL Injection In Mind - Method 2
// $note = $db->query("SELECT * FROM notes WHERE id = :id", [
    
//     "id" => $_GET["id"]
    
// ])->fetch();



// Show 404, If Note Doesn't Exist In DB
if (!$note) {
    abort();
}


// Show 404, If If Unauthorized Access Occurs
if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";


