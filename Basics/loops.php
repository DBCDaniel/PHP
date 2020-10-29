<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <title>Loops</title>
    </head>
    <body>
        <?php
            //while loop
            $counter = 0;
            while($counter <= 10)
            {
                echo $counter++;
                echo "<br>";
            }
        
            echo "<br>";
            //do-while loop
            do{
                echo --$counter;
                echo "<br>";
            }while($counter > 0);
                          
            echo "<br>";  
            $int = [];
            //for loop
            for($i = 0; $i <= 10; $i++)
            {
                echo $i;
                $int[$i] = $i;
            }
                          
            echo "<br>";  
            //foreach loop
            foreach($int as $val)
            {
                echo $val;
            }
        
        ?>
    </body>
</html>