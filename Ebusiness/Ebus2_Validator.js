/* global $ */
function validateDetails(){

     var pin, name, email;

        pin = document.getElementById("user_pin").value;
        email = document.getElementById("email").value;
        name = document.getElementById("name").value;
 
   
    
        if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
   
        if (name==""){
            
        alert("Please enter your name.")
}
 
          
    if (email==""){
                 alert("Please enter your Email.")
             }  
  else
   {
                   enablebtnPurchase();
              }
    
}

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}