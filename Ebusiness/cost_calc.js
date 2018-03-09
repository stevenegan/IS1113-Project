/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
    }
    if(document.getElementById('c9').checked) {
      argSubTotal = 200;
    }
     

    if(document.getElementById('aws').checked) {
      argSubTotal = 300;
    }
    if(document.getElementById('gmail').checked) {
      argSubTotal = 400;
    }
    
  
    
    display(argSubTotal);

 calcDisVatTotal(argSubTotal);
}



function calcDisVatTotal(parmSubTotal){
    
    //Declare all the variables 
    var subTotal;
    var x = 0.05;
    var discountAmt;
    var y = 0.1;
    var vatAmt;
    var totalPrice;

    subTotal = parmSubTotal; 
    discountAmt = (subTotal * x); 
    vatAmt = ((subTotal - discountAmt) * y); 
    totalPrice = (subTotal - discountAmt + vatAmt );
    
    display(subTotal, discountAmt, vatAmt, totalPrice); 
}

function display(parm1,parm2,parm3,parm4){
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("total").value = parm4;
  document.getElementById("vat").value = parm3;
  document.getElementById("discount").value = parm2;
        
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}