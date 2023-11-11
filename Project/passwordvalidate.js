function validate(){
    var password = document.getElementById("password");
    var upper = document.getElementById("upper");
    var lower = document.getElementById("lower");
    var num = document.getElementById("number");
    var len = document.getElementById("length");
    var special_character = document.getElementById("special_character");

    if(password.value.match(/[0-9]/)){
        num.style.color = "green"
    }
    else{
        num.style.color = "red"
    }

    if(password.value.match(/[A-Z]/)){
        upper.style.color = "green"
    }
    else{
        upper.style.color = "red"
    }

    if(password.value.match(/[a-z]/)){
        lower.style.color = "green"
    }
    else{
        lower.style.color = "red"
    }


    if(password.value.length < 8){
        len.style.color = "red"
    }
    else{
        len.style.color = "green"
    }

    if(password.value.match(/[!\@\#\$\%\^\&\*\(\)\_\-\+\=\?\>\<\.\,]/)){
        special_character.style.color = "green"
    }
    else{
        special_character.style.color= "red"
    }
}

function confirmm(){

    var password = document.getElementById("password");
    var cpassword = document.getElementById("cpassword");
    if(password.value == cpassword.value ){
        document.getElementById("number").style.display = "none";
        document.getElementById("length").style.display = "none";
        document.getElementById("special_character").style.display = "none";
        document.getElementById("upper").style.display = "none";
        document.getElementById("lower").style.display = "none";
    }
    else{
        document.getElementById("number").style.display = "block";
        document.getElementById("length").style.display = "block";
        document.getElementById("special_character").style.display = "block";
        document.getElementById("upper").style.display = "block";
        document.getElementById("lower").style.display = "block";

    }
}
