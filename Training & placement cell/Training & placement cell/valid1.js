function validateEmpty(name, helptext, msg) {
    
    if (name.value.length == 0) {
        helptext.innerHTML = msg
        return false;
    } else {
        helptext.innerHTML = ""
        return true;
    }
}

function validateName(name, helptext, msg) {
    cnname = name.value;
    regExp = /^[a-zA-Z ]+(\.[a-zA-Z ]+)*$/;
    if (!regExp.test(cnname)) {
        helptext.innerHTML = msg
    } else {
        helptext.innerHTML = ""
    }
}

function validateMobile(inputField, helptext, msg) {
    mobile = inputField.value;
    regExp = /^[6-9]{1}[0-9]{9}$/;
    //alert(regExp.test(mobile)) 
    if (!regExp.test(mobile)) {
        helptext.innerHTML = msg;
    } else {
        helptext.innerHTML = "";
    }
}

function validateEmail(inputField, helptext, msg) {
    cnname = inputField.value;
    regExp = /^[a-zA-Z0-9#]+(\.[a-zA-Z0-9_-]+)*@[a-zA-Z0-9]+(\.[a-zA-Z]{2,3})+$/;
    if (!regExp.test(cnname)) {
        helptext.innerHTML = msg;
    } else {
        helptext.innerHTML = "";
    }
}