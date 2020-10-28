<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <title>User Input</title>
    </head>
    <body>
        <form action="userInput.php" method="get">
            <label>Name: </label>
            <input type="text" name="name_input"/><br />
            <br /><br />
            <button type="Submit">Submit</button>
        </form>
            <br /><br />
        <?php
        if(array_key_exists("name_input", $_GET))
            echo "Hello ".$_GET["name_input"];
        ?>
    </body>
</html>