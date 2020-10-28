<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <title>Associative Arrays</title>
    </head>
    <body>
        <?php
        /*
            associative arrays are like dictionaries in c#
        */
        $grades = array("Jim"=>"A+", "Jim"=>"F", "Pam"=>"B-", "Oscar"=>"C+");
        echo "Jim's grade was ".$grades["Jim"]."<br>";
        echo "Pam's grade was ".$grades["Pam"]."<br>";
        ?>
    </body>
</html>