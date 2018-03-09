<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel="stylesheet" type="text/css" href="../mystylesheet.css">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body>
        
        <div class="Products">
            <h4 class="product-header">Select a Product</h4>
            
            <br/>
            
            <form method="POST" action="Ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              <label for="c9">
                <input type="radio" id="c9" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
              </label>
              <br/>
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br/>
              
              <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
              </label>
              
              <br/>
              <br>
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              <br>
              
            <label for="vat">
                VAT @ 10%: 
                <input type="text" id="vat" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
            
            
            <label for="discount">
                Discount @ 5%: 
                <input type="text" id="discount" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
            
              <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              <br>
              
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            </form>
          
            <br>
            <br/>
             
            <button onClick="calcSub()">Calculate Cost</button>
            
            <a role="button" href="Ebus1.php">Clear Choice</a>
            </div>

    </div>
    </body>
</html>