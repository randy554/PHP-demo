<?php

require "functions.php";

// require "router.php";


// Connect To Our MySQL Database
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);

// Prepare & Execute SQL Query To Database
$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

// Get All The Record Results From The Executed Query
// ::FETCH_ASSOC To Receive Only Associative Array Results
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);


foreach ($posts as $post) :

    echo "<li>" . $post["title"] . "</li>";

endforeach;