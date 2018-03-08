/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
    }
    else if(document.getElementById('aws').checked) {
      argSubTotal = 300;
    }
    else if(document.getElementById('Gmail').checked) {
      argSubTotal = 400;
    }
     else if(document.getElementById('Cloud9').checked) {
      argSubTotal = 200;
    }
    
    display(argSubTotal);


calcDisVatTotal(argSubTotal);
}

function calcDisVatTotal(parmSubTotal){
  
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
  document.getElementById("discount for 5%").value = parm2;
  document.getElementById("vat for 10%").value = parm3;
  document.getElementById("total").value = parm4;
        
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}