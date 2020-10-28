<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <title>Arrays</title>
    </head>
    <body>
        <?php
        /*
            arrays in php is like lists in c#
        */
        $coworkers = array("Søren", "Jeppe", "Jonas", "Armann"); 
        echo "first coworker: ".$coworkers[0];
        echo "<br>";
        
        $coworkers[0] = "Dwight";
        echo "first fake coworker: ".$coworkers[0];
        echo "<br>";
        
        $coworkers[0] = "Søren";
        echo "numbers of non-fake coworkers: ".count($coworkers);
        echo "<br>";
        
        $coworkers[4] = "Dwight";
        echo "numbers of coworkers: ".count($coworkers);
        echo "<br>";
        ?>
    </body>
</html>