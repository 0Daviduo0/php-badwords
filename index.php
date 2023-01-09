<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>
        <?php
            // Giving and printing original phrase
            $phrase = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, eius assumenda vero veniam illum tempore, aliquid tempora et id aut quisquam enim at dolor neque dolores, sunt blanditiis placeat quae!";
            echo $phrase;
        ?>
    </p>

    <h3>

        String length:
        <?php
            // Getting phrase length
            echo strlen($phrase);
        ?>

    </h3>

</body>
</html>