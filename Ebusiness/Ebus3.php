<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
        
        
        <?php
        echo "Details " . $_POST["total"];
        ?>
                
        <?php
        // Echo session variables that were set on previous page
        echo "Name: " . $_POST["name"] . "<br/> <br>";
        echo "Email: " . $_POST["email"] . "<br/> <br>";
        echo "Total price is " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>