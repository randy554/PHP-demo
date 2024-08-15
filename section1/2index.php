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
            "Do Androids Dream of Electric Sheep",
            "The Langoliers",
            "Hail Mary",
        ];

    ?>

    <ul>

        <?php

            foreach ($books as $book) {
                echo "<li>$book</li>";
            }

        ?>

    </ul>

</body>
</html>