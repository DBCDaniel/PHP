<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <title>Calculator</title>
    </head>
    <body>
        <form action="Calculator.php" method="get">
            <label>Number 1: </label><input type=number name="sum1">
            <br>
            <label>Number 2: </label><input type=number name="sum2">
            <br>
            <br>
            <button type="submit">Submit</button>
        </form>
            <br>
            <br>
        <?php
            $result = 0;
            if(array_key_exists("sum1", $_GET))
                $result += $_GET["sum1"];
            if(array_key_exists("sum2", $_GET))
                $result += $_GET["sum2"];
            echo "Result: ". $result;
        ?>
    </body>
</html>