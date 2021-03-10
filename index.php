<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Do not close</title>
    </head>
    <body align="center">
        <?php
            echo '<div>
                <h1>With what you and ours hommies do not close?</h1>
                <form action="index.php" method="post">
                    <input type="text" name="donotclose" />
                    <input type="submit" name="submit" value="SUBMIT THIS SHIT" />
                </form>
            </div>';
            if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['donotclose'] != NULL) {
                $closedwith =  strtoupper($_POST['donotclose']);
                echo ("<div id='closed'> <h1> ME AND MY HOMMIES </h1> 
                <img src='asserts/penile.png'/> 
                <h1> DO NOT CLOSE WITH $closedwith</h1> 
                </div>");
            }
        ?>
    </body>
</html>