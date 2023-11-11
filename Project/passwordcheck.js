function validatepassword() {
    var passwordInput = document.getElementById("password");
    var passwordError = document.getElementById("passwordError");

    var upper = document.getElementById("upperCase");
    var symbol = document.getElementById("symbol");
    var num = document.getElementById("number");
    var len = document.getElementById("length");
    
    
 
    if(passwordInput.value.match(/[A-Z]/)){
        upper.style.color = "green"
    }
    else{
        upper.style.color = "red"
       
    }

    if(passwordInput.value.match(/[!\@\#\$\%\^\&\*\(\)\_\-\+\=\?\>\<\.\,]/)){
        symbol.style.color = "green"
    }
    else{
        symbol.style.color= "red"
        
    }

    if(passwordInput.value.match(/[0-9]/)){
        num.style.color = "green"
    }
    else{
        num.style.color = "red"
        
    }

    if(passwordInput.value.length < 8){
        len.style.color = "red"
         
    }
    else{
        len.style.color = "green"
         
    }
    

}

function confirmm(){

    var password = document.getElementById("password");
    var cpassword = document.getElementById("cpassword");
    if(password.value == cpassword.value ){
        document.getElementById("number").style.display = "none";
        document.getElementById("length").style.display = "none";
        document.getElementById("symbol").style.display = "none";
        document.getElementById("upperCase").style.display = "none";
    }
    else{
        document.getElementById("number").style.display = "block";
        document.getElementById("length").style.display = "block";
        document.getElementById("symbol").style.display = "block";
        document.getElementById("upperCase").style.display = "block";
    }
}

