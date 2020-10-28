<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <title>Mad Libs Mini Game</title>
    </head>
    <body>
        <h2>Mad Libs</h2>
        <h4>Mini Game</h4>
        <hr>
        <p>
        <?php
            $word01 = "_____";
            if(array_key_exists("color", $_GET))
                $word01 =$_GET["color"];
            $word02 = "____";
            if(array_key_exists("noun", $_GET))
                $word02 =$_GET["noun"];
            $word03 = "________";
            if(array_key_exists("celeb", $_GET))
                $word03 =$_GET["celeb"];
                echo "Roses are $word01.<br>";
                echo "$word02 are blue.<br>";
                echo "I love $word03.<br>";
        ?>
        </p>
        <form action="MadLibsMiniGame.php" method="get">
            <label>Color: </label><input type=text name="color">
            <br>
            <label>Noun: </label><input type=text name="noun">
            <br>
            <label>Celebrity: </label><input type=text name="celeb">
            <br>
            <br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>