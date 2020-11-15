function validate(){
    var numBlanket = document.getElementById("numBlanket");
    var numFork = document.getElementById("numFork");
    var numNote = document.getElementById("numNote");

    var username = document.getElementById("username");
    var password = document.getElementById("pasword");

    var shipping = document.getElementsByName("shipping");

    if (numBlanket.value > 10 || numBlanket.value < 0){
        return errorForm();
    }
    if (numFork.value > 10 || numFork.value < 0){
        return errorForm();
    }
    if (numNote.value > 10 || numNote.value < 0){
        return errorForm();
    }

    if (username.value == ""){
        return errorForm();
    }
    if (password.value == ""){
        return errorForm();
    }

    var optionSelected = false;
    for(var i = 0; i < shipping.length; i++){
        if(shipping[i].checked){
            optionSelected = true;
        }
    }
    if(!optionSelected){
        return errorForm();
    }

    alert("Validations successful!");
    return true;
}

function errorForm(){
    alert("Oops! Validation failed!");
    returnToPreviousPage();
    return false;
}