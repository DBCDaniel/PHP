<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <title>CheckBoxes</title>
    </head>
    <body>
        <form action="Checkboxes.php" method="post">
            <label>Apples:</label><input type="checkbox" name="fruits[]" value="apples"><br>
            <label>Oranges:</label><input type="checkbox" name="fruits[]" value="oranges"><br>
            <label>Pears:</label><input type="checkbox" name="fruits[]" value="pears"><br>
            <button type="submit">Submit</button>
        </form>
        <br>
        <br>
        <?php
            if(array_key_exists("fruits", $_POST))
            {
                $fruits = $_POST["fruits"];
                for($i =0; $i < count($fruits); $i++) 
                {
                    echo $fruits[$i]."<br>";
                }
            };
        ?> 
    </body>
</html>