<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommended Books</title>
    <style>

        :root {
            --pagePC: #adb7c6;
            --pageBGC:  #282d3f;
        }

        body {
            display: grid;
            place-items: center;
            margin: 0;
            font-family: sans-serif;

            background-color: var(--pageBGC);
            color: var(--pagePC);

        }
    </style>
</head>
<body>
    
    <h1>
        Recommended Books
    </h1>

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
        function filter ($items, $key, $value) {
            
            // New filtered list
            $filteredItems = [];

            foreach($items as $item) {

                if($item[$key] === $value){
                    $filteredItems[] = $item;
                }

            }

            return $filteredItems;
        };

        $filteredBooks = filter($books, 'author', 'Andy Weir');
    ?>

    <ul>

        <?php foreach ($filteredBooks as $book) : ?>

            <li>
                <a href="<?php echo $book['purchaseUrl'] ?>">
                    <?php echo $book['name']; echo " " . "(" . $book['releaseYear'] .")"; ?>
                </a>
            </li>

        <?php endforeach; ?>

    </ul>


</body>
</html>