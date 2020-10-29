<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <title> Functions </title>
    </head>
    <body>
        <?php
            function sayHi($name)
            {
                echo "Hi $name";
            }
        
            sayHi("Daniel");
        
            function cube($num)
            {
                return $num * $num * $num;
            }
            
            $cubeResult = cube(4);
        
            echo "cube 4 = $cubeResult";
        ?>
    </body>
</html>