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
}

calcdiscountvattotal(argSubTotal);
}
function calcdiscountvattotal(parmSubTotal){
  var = discount, vat, total;
  
  discount = parmSubTotal * 0.05
  vat = (parmSubTotal - discount )* 0.10
  total = parmSubTotal - discount + vat
  
  display(parmSubTotal, discount, vat, total)
  
}
function display(parm1){
  
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