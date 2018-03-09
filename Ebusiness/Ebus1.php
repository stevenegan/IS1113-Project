<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
         <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />

    </head>
    
    <body>
        <div class="Products">
        
            <h4 class="product-header">Select a Product</h4>
            
            <br/>
            
            <form method="POST" action="Ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="salesforce" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="aws" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br/>
            
              <label for="Cloud 9">
                <input type="radio" id="Cloud9" name="Cloud9" onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
              </label>
              <br/>
            
              <label for="Gmail">
                <input type="radio" id="Gmail" name="Gmail" onClick="disablebtnProceed()"/>
                Gmail @ $400
              </label>
              <br/>
              
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              
               <br/>
              <label for="discount">
              Discount @ 5%
                <input type="text" id="discount" name="discount"  value="0.00" readonly/>
             </label>

             <br/>

            

             <br/>
              <label for="vat">
              
              Vat @ 10%
              
             <input type="text" id="vat" name="vat" value="0.00" readonly/>
        
             </label>
             
              <br/>
              <br/>
              
             <label for="total">
                Total
             <input type="text" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              
              <label for="(-Discount,+Vat)">

                [ Discount (-) , Vat (+) ]

                <input type="hidden" name="(-Discount,+Vat)"  readonly/>

              </label>
    

              <br/>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
    </div>
    </body>
</html>