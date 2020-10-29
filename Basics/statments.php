<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <title>Statement</title>
    </head>
    <body>
        <?php
            echo "I wake up <br >";
            $hungry = false;
            if($hungry)
                echo "I eat breakfast";
            else
                echo "I don't eat breakfast";
        
            echo "<br ><br ><br >";
            
            $isMale = true;
            $isTall = false;
        
            if($isMale && $isTall)
                echo "You are a tall male";
            elseif($isMale || $isTall)
            {
                if($isMale && !$isTall)
                    echo "You are a small male";
                
                if(!$isMale && $isTall)
                    echo "You are a tall female";
            }
            else
                echo "You are a small female";
        
            echo "<br ><br ><br >";
        
            $grade = "C";
        
            switch($grade)
            {
                case "A+":
                case "A":
                    echo "You did Great!";
                    break;
                case "B":
                    echo "You did pretty good";
                    break;
                case "C":
                case "D":
                    echo "You can do better";
                    break;
                case "F":
                    echo "You Failed!";
                    break;
                default:
                    echo "Is that a grade?";
                    break;
                    
            }
        ?>
    </body>
</html>