<?php

$books = [
    
    [
        "name" => "Do Androids Dream of Electric Sheep",
        "author" => "Philip K. Dick",
        "releaseYear" => 1968,
        "purchaseUrl" => "http://example.com"
    ],
    [
        "name" => "Project Hail Mary",
        "author" => "Andy Weir",
        "releaseYear" => 2021,
        "purchaseUrl" => "http://example.com"
    ],
    [
        "name" => "The Martian",
        "author" => "Andy Weir",
        "releaseYear" => 2011,
        "purchaseUrl" => "http://example.com"
    ]

];

// Anonymous function aka Lambda function
function filter ($items, $fn) {

    // New filtered list
    $filteredItems = [];

    foreach($items as $item) {

        if($fn($item)){
            $filteredItems[] = $item;
        }

    }

    return $filteredItems;
};

// Filter with custom anonymous function
$filteredBooksOwn = filter($books, function ($book) {

    return $book['author'] === 'Philip K. Dick';

});

// Filter with PHP buit-in function
$filteredBooksPHP = array_filter($books, function ($book) {
    
    return $book['releaseYear'] > 2000;
    
});

require "index.view.php";