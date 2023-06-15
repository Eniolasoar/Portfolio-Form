
var password=document.forms.myform.password;
password.addEventListener("focus",passwordBoxReveal);


function passwordBoxReveal(){
    
    var passwordBox=document.getElementById("passwordBox");
    
    passwordBox.style.display="block";
    
}



