<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="Ebus2_validator.js"></script>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
    </head>
    <body>
            <div class="Detials1">
        <h4>Please enter your payment details</h4>
        
        
            <form action="Ebus3.php" method="POST">
                
          <label for="name">

          <input type="text" id="name" name="name" placeholder="Name" value=""/>

          </label>

          </br>
          
          <label for="email">

          <input type="email" id="email" name="email" placeholder="Email" value=""/>

          </label>

          </br>

          <label for="user_pin">
                    
          <input type="password" id="user_pin" name"user_pin" placeholder="Card PIN" maxlength="4">
          
          </label>
          
          </br> 
          
          </br>
          
          <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            
            <button id="btnVal" onClick="validateDetails()">Validate</button>
            </div>
            <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
            $_SESSION["vat"] = $_POST["vat"];
            $_SESSION["discount"] = $_POST["discount"];
            $_SESSION["subtotal"] = $_POST["subtotal"];
            ?>
        
    </body>
</html>