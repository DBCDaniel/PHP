<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <title>Strings</title>
    </head>
    <body>
        <?php
         $world = "World";
         echo "Hello $world";
            echo "<br>";
         echo strtolower("Hello $world lowercase");
            echo "<br>";
         echo strtoUpper("Hello $world uppercase");
            echo "<br>";
         echo "$world lenght: ".strlen($world);
            echo "<br>";
         echo "first letter in $world is ".$world[0];
            echo "<br>";
        echo "Jello World should be : ";
        echo str_replace("J", "H", "Jello World");
            echo "<br>";
        echo "Hell".substr("Hello World", 4, 7);
        ?>
    </body>
</html>