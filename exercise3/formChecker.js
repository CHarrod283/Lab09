function validate(){
	//so because I used email input, I dont need this file, but 
	//heres a rudementary check of how I would get the substrings of the email for validation
    var username = document.getElementById("username").value;
    var topLevelDomain = username.substring(username.lastIndexOf("."), username.length);
    var domain = username.substring(username.lastIndexOf("@"), username.lastIndexOf(".") - 1);
    var uname = username.substring(0, username.lastIndexOf("@");

    if(domain == "@"){
	return errorForm();
    }
    if (topLevelDomain == "."){
        return errorForm();
    }
    if (uname == ""){
	return errorForm();
    }

    return true;
}

function errorForm(){
    alert("Invalid Email");
    window.history.back();
    return false;
}

